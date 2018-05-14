<div class="modal fade {{isset($cl) ? $cl :''}}" tabindex="-1" role="dialog" id="{{$id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$title}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    @yield('modal_body')
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <button type="button" class="btn left" data-dismiss="modal">Close</button>
                    @yield('modal_buttons')
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->