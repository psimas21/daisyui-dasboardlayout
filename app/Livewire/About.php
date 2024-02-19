<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{

    public $rows = [
        [
          'id' => 1,
          'company' => 'Chase & Co.',
          'share' => 'CAC',
          'commission' => '+$4.37',
          'price' => '$3,509.00',
          'quantity' => '12.00',
          'netAmount' => '$4,397.00',
        ],
    ];

    public function render()
    {
        return view('livewire.about');
    }
}
