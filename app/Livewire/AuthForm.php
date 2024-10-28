<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout('components.layouts.auth')]
class AuthForm extends Component
{
    public function render()
    {
        return view('livewire.auth-form');
    }
}
