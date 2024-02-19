<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;

class Contact extends Component
{   
     // Use this trait 
     use Toast;
     
    public function test(){
        $this->success('We are done, check it out');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
