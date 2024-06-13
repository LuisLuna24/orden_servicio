<?php

namespace App\Livewire\Ordenes;

use Livewire\Component;

class Create extends Component
{

//================================================================Crear muestra
    public $add_muestra=false;

    public function new_muestra(){
        $this->add_muestra=true;
    }

    public function cancel_muestra(){
        $this->add_muestra=false;
    }


//================================================================Ver muestra
    public $view_muestra=false;

    public function ver_muestra(){
        $this->view_muestra=true;
    }


//================================================================Render 
    public function render()
    {
        return view('livewire.ordenes.create');
    }
}
