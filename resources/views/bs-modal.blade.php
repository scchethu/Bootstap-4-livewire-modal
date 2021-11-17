<div>
    <div id="modal_bs4_wire" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        @if($title)
                            {{$title}}
                        @endif
                    </h4>
                    <button type="button" class="close"  data-dismiss="modal">
                        &times;
                    </button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    @if(isset($component))
                        @livewire($component)
                    @endif
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Close
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('openModalInBrowser', event => {
        $('#modal_bs4_wire').modal('show');
    })
    window.addEventListener('closeModalInBrowser', event => {
        $('#modal_bs4_wire').modal('hide');
    })
</script>