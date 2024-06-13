<?php

namespace App\Livewire\Ordenes;

use Livewire\Component;

class Index extends Component
{
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
        return view('livewire.ordenes.index');
    }
}
