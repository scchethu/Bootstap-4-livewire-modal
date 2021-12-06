<div>
    <div id="modal_bs4_wire" class="modal" >
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        @isset($componentAttributes['title'])
                            {{$componentAttributes['title']}}
                        @endisset
                    </h4>
                    <button type="button" class="close" wire:click="$emitSelf('closeModal')" data-dismiss="modal">
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
                            data-dismiss="modal" wire:click="$emitSelf('closeModal')">Close
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('openModalInBrowser', event => {
        $('#modal_bs4_wire').modal( {
            backdrop: 'static',
            keyboard: false,
            show:true
        });
    })
    window.addEventListener('closeModalInBrowser', event => {
        $('#modal_bs4_wire').modal('hide');
    })
</script>