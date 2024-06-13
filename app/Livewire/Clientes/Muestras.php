<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Muestras extends Component
{
    public $analisis=false;

    public function agregar_analisis(){
        $this->analisis=true;   
    }

    public function down_reg(){
        $this->analisis=false;
    }

    public $editar=false;

    public function editar_muestra(){
        $this->editar=true;
    }

    public function down_edit(){
        $this->editar=false;
    }


    public function render()
    {
        return view('livewire.clientes.muestras');
    }
}
