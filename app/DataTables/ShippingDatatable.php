<?php

namespace App\DataTables;

use App\Model\Shipping;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;

class ShippingDatatable extends DataTable {
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('actions', 'admin.shipping.buttons.actions')
            ->addColumn('checkbox', 'admin.shipping.buttons.checkbox')
			->rawColumns([
				'actions',
				'checkbox',
			]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query() {
        return Shipping::query()->with('user_id')->select('shippings.*');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html() 
    {
        return $this->builder()
        ->setTableId('shipping-table')
        ->columns($this->getColumns())
                ->minifiedAjax()
                ->dom('Blfrtip')
                ->orderBy(1)
                ->lengthMenu([[10,25,50,100,250, -1],[10,25,50,100,250, trans('admin.all_record')]])
                ->buttons(
                    Button::make('create')->className('btn btn-primary ml-2 my-3')->text('<i class="fa fa-plus"></i> '.trans('admin.create_admin')),
                    Button::make('export')->className('btn btn-danger ml-2')->text('<i class="fa fa-download"></i> '.trans('admin.ex_csv')),
                    Button::make('print')->className('btn btn-success ml-2')->text('<i class="fa fa-print"></i>'.trans('admin.print')),
                    Button::make()->className('btn btn-danger ml-2 delBtn')->text('<i class="fa fa-trash"></i>'.trans('admin.deleteAll')),
                    // Button::make('reset')->className('btn btn-info ml-2'),
                    Button::make('reload')->className('btn btn-warning ml-2')->text('<i class="fa fa-undo"></i>'.trans('admin.refresh')),
                )
                ->parameters([
                    'initComplete' => " function () {
                        this.api().columns([2,3]).every(function () {
                            var column = this;
                            var input = document.createElement(\"input\");
                            $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                        });
                    }",
                    'language' => datatable_lang(),
                ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            [
                'name'       => 'checkbox',
                'data'       => 'checkbox',
                'title'      => '<input type="checkbox" class="check_all" onclick="check_all()" />',
                'exportable' => false,
                'printable'  => false,
                'orderable'  => false,
                'searchable' => false,
            ], [
                'name'  => 'id',
                'data'  => 'id',
                'title' => '#',
            ], [
                'name'  => 'name_ar',
                'data'  => 'name_ar',
                'title' => trans('admin.name_ar'),
            ], [
                'name'  => 'name_en',
                'data'  => 'name_en',
                'title' => trans('admin.name_en'),
            ], [
                'name'  => 'user_id.name',
                'data'  => 'user_id.name',
                'title' => trans('admin.owner_id'),
            ], [
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
            ], [
                'name'  => 'updated_at',
                'data'  => 'updated_at',
                'title' => trans('admin.updated_at'),
            ], [
				'name'       => 'actions',
				'data'       => 'actions',
				'title'      => trans('admin.actions'),
				'exportable' => false,
				'printable'  => false,
				'orderable'  => false,
				'searchable' => false,
            ], 
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'manufacturers_' . date('YmdHis');
    }
}
