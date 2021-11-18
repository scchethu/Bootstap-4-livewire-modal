<?php

namespace BsWireModal;

use Livewire\Component;

class BsModal extends Component
{
    protected $listeners = ['openModal','closeModal'];
    public $component = null;
    public $title = null;
    public function openModal($component,$title='')
    {
        $this->component = $component;
        $this->title = $title;
        $this->dispatchBrowserEvent('openModalInBrowser');
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
