<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Show extends Component
{
    public $datos_muestra=false;
    public function active(){
        $this->datos_muestra = true;
    }
    public function render()
    {
        return view('livewire.clientes.show');
    }
}
