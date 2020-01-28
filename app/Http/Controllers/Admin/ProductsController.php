<?php
namespace App\Http\Controllers\Admin;

use App\DataTables\ProductsDatatable;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Weight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(ProductsDatatable $trade)
   {
      return $trade->render('admin.products.index', ['title' => trans('admin.products')]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $product = Product::create(['title'=>'']);
      // dd($product);
      if (!empty($product)) {
         return redirect(aurl('products/' . $product->id . '/edit'));
      }
      return view('admin.products.manageProduct', ['title' => trans('admin.create_or_edit_product')]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store()
   {

      $data = $this->validate(request(),
         [
            'name_ar' => 'required',
            'name_en' => 'required',

         ], [], [
            'name_ar' => trans('admin.name_ar'),
            'name_en' => trans('admin.name_en'),
         ]);

      Weight::create($data);
      session()->flash('success', trans('admin.record_added'));
      return redirect(aurl('weights'));
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $product = Product::find($id);
      return view(
                  'admin.products.manageProduct', 
                  ['title' => trans('admin.create_or_edit_product', ['title'=>$product->title])],
                   compact('product')
               );
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $r, $id)
   {

      $data = $this->validate(request(),
         [
            'name_ar' => 'required',
            'name_en' => 'required',
         ], [], [
            'name_ar' => trans('admin.name_ar'),
            'name_en' => trans('admin.name_en'),
         ]);

      Color::where('id', $id)->update($data);
      session()->flash('success', trans('admin.updated_record'));
      return redirect(aurl('weights'));
   }

   public function uploadProductImage($id)
   {
      $product = Product::whereId($id)->update([
         'photo' => up()->upload([
            'file'        => 'file',
            'path'        => 'products/'.$id,
            'upload_type' => 'single',
            'delete_file' => '',
         ])
      ]);
      //'photo'=>$product->photo
      return response(['status'=>true],200);   
   }

   public function deleteProductImage($id)
   {
      $product = Product::find($id);
      Storage::delete($product->photo);
      $product->photo = null;
      $product->save();
      return response(['status'=>true],200); 
   }


   public function uploadProduct($id)
   {
      $product = Product::findOrFail($id);
      if (request()->hasFile('file')) {
			 $file_id = up()->upload([
					'file'        => 'file',
					'path'        => 'products/'.$id,
					'upload_type' => 'files',
					'file_type' => 'product',
					'relation_id' => $id,
            ]);
         return response(['status'=>true, 'id'=>$file_id],200);   
		}
   }

   public function deleteProduct()
   {
      if (request()->has('id')) {
         return up()->delete(request('id'));
     }
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $weights = Weights::find($id);
      $weights->delete();
      session()->flash('success', trans('admin.deleted_record'));
      return redirect(aurl('weights'));
   }

   public function multi_delete()
   {
      if (is_array(request('item'))) {
         foreach (request('item') as $id) {
            $weights = Weight::find($id);
            $weights->delete();
         }
      } else {
         $weights = Weight::find(request('item'));
         $weights->delete();
      }
      session()->flash('success', trans('admin.deleted_record'));
      return redirect(aurl('weights'));
   }
}
