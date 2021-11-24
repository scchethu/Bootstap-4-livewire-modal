<?php

namespace BsWireModal;

use Livewire\Component;

class BsModal extends Component
{
    protected $listeners = ['openModal','closeModal'];
    public $component = null;
    public $componentAttributes = [];
    public function openModal($component,$componentAttributes = [], $modalAttributes = [])
    {

        $this->component = $component;
        $this->componentAttributes = $componentAttributes;
        $this->dispatchBrowserEvent('openModalInBrowser');
        if(isset($componentAttributes['id'])) {
            $this>$this->emitTo($component,'editForm',$componentAttributes['id']);
        }
        else
        {
            $this>$this->emitTo($component,'addForm');
        }
    }
    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModalInBrowser');
    }
    public function render()
    {
        return view('livewire-bs4-ui-modal::bs-modal');
    }

}
