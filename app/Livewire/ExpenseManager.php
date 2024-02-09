<?php

namespace App\Livewire;

use Livewire\Component;

class ExpenseManager extends Component
{
    public function render()
    {
        return view('livewire.expense-manager')->layout('layouts.app');
    }
}
