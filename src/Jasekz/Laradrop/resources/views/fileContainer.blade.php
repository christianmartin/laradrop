<div class="col-md-2" file-id="[[id]]">
    <div class="panel panel-default">
        <div class="panel-body">
            <img src="[[fileSrc]]" alt="[[alias]]" class="img-responsive">
            <div class="text-center">
                <p>[[alias]]</p>
            </div>
        </div>
        <div class="panel-footer">
            <small class="text-info">[[type]] / [[updated_at]]</small>
            <div class="pull-right">
                <a href="{{ route('laradrop.index') }}" class="btn btn-xs btn-danger laradrop-file-delete" rel="tooltip" title="{{ trans('laradrop::app.delete') }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>