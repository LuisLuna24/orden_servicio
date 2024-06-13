<?php

namespace App\Livewire\Ordenes;

use Livewire\Component;

class Show extends Component
{

    public $view_muestra=false;

    public function ver_muestra(){
        $this->view_muestra=true;
    }

    public function cancel_muestra(){
        $this->view_muestra=false;
    }
    public function render()
    {
        return view('livewire.ordenes.show');
    }
}
