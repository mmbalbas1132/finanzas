<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Facades\Livewire; // Add this line

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.app');
    }
}
