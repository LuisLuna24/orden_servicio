<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class Index extends Component
{

    public $delete_orden=false;

    public $no_orden_eliminar;

    public function delete($id){
        $this->delete_orden=true;
        $this->no_orden_eliminar=$id;
    }

    public function regresar(){
        $this->delete_orden=false;
    }
    public function render()
    {
        return view('livewire.clientes.index');
    }
}
