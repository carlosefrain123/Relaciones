<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $users= User::all();
        return view('livewire.navigation', compact('users'));
    }
}
