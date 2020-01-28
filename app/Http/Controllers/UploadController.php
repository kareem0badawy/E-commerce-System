<?php
namespace App\Http\Controllers;
use Storage;
use App\Model\File;

class UploadController extends Controller {
	/*
	'name',
	'size',
	'file',
	'path',
	'full_path',
	'mime_type',
	'file_type',
	'relation_id',
	 */
	public function upload($data = []) {
		if (in_array('new_name', $data)) {
			$new_name = $data['new_name'] === null?time():$data['new_name'];
		}
		if (request()->hasFile($data['file']) && $data['upload_type'] == 'single') {

			Storage::has($data['delete_file'])?Storage::delete($data['delete_file']):'';
			return request()->file($data['file'])->store($data['path']);

		}elseif (request()->hasFile($data['file']) && $data['upload_type'] == 'files') {
			$file = request()->file($data['file']);
			$file->store($data['path']);
			$name = $file->getClientOriginalName();
			$size = $file->getSize();
			$hashName = $file->hashName();
			$mime_type = $file->getMimeType();
			$add = File::create([
				'name' 			=> $name,
				'size' 			=> $size,
				'file' 			=> $hashName,
				'path' 			=> $data['path'],
				'full_path' 	=>$data['path'].'/'.$hashName,
				'mime_type' 	=> $mime_type,
				'file_type' 	=> $data['file_type'],
				'relation_id' 	=> $data['relation_id'],
			]);
			return $add->id;
		}
	}

	public function delete($id)
	{
		$file = File::find($id);
		if (!empty($file)) {
			Storage::delete($file->full_path);
			$file->delete();
		}
	}
}