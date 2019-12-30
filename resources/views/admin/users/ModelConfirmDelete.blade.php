<!-- Start Modal Confirm Delete -->
<div id="mutlipleDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header d-block">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
        </div>
        <div class="modal-body">
            <div class="alert alert-danger">
            <div class="empty_record d-none">
                <h6>{{ trans('admin.please_check_some_records') }}</h6>
            </div>
            <div class="not_empty_record d-none">
                <h6>{{ trans('admin.ask_delete_itme') }}<span class="record_count"></span> ?</h6>
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="empty_record d-none">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.close') }}</button>
            </div>
            <div class="not_empty_record d-none">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.no') }}</button>
            <input type="submit" value="{{ trans('admin.yes') }}" class="btn btn-danger del_all" />
            </div>
        </div>
        </div>
    </div>
</div>
<!-- End Modal Confirm Delete -->