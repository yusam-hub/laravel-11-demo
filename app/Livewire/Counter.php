<?php

namespace App\Livewire;

class Counter extends \Livewire\Component
{
    public int $count = 1;

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
