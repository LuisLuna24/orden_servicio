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

    public $delete_orden=false;
    public $ordenEdit=[
        'no_orden'=>'',
    ];

    public function delete($id){
        $this->delete_orden=true;
        $this->ordenEdit = [
            'no_orden' => $id,
        ];
    }

    public function regresar(){
        $this->delete_orden=false;
    }
    public function render()
    {
        return view('livewire.ordenes.show');
    }
}
