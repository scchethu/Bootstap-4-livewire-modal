<?php

namespace BsWireModal;

use Livewire\Component;

class BsModal extends Component
{
    public bool $open = false;
    protected $listeners = ['openModal','closeModal'];
    public $component = null;
    public $title = null;
    public function openModal($component,$title='')
    {
        $this->component = $component;
        $this->title = $title;
        $this->open = true;
        $this->dispatchBrowserEvent('openModalInBrowser');
    }
    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeModalInBrowser');
        $this->open = false;
    }
    public function render()
    {
        return view('livewire-bs4-ui-modal::bs-modal');
    }

}
