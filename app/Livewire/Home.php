<?php

namespace App\Livewire;

use Livewire\Component;
use Mary\Traits\Toast;

class Home extends Component
{
     // Use this trait 
     use Toast;
     
    public function save()
    {
    
        // Toast
        $this->success('We are done, check it out');
    }
    public function render()
    {
        return view('livewire.home');
    }
}
