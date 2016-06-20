<div class="laradrop-thumbnail thumbnail laradrop-droppable col-md-2 laradrop-draggable "  file-id="[[id]]">
    <div class=" well" >
        <h4 class="laradrop-filealias" >[[alias]]</h4>
        <p class="text-info">[[type]] / [[updated_at]]</p>
        <p>
            
            <a href="{{ route('laradrop.index') }}" class="label label-danger laradrop-file-delete" rel="tooltip" title="{{ trans('laradrop::app.delete') }}">{{ trans('laradrop::app.delete') }}</a>
            
        </p>
        <img src="[[fileSrc]]" alt="[[alias]]" class="img-responsive">
    </div>
</div>

