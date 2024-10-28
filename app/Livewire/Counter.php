<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Http\Response;

//#[Layout('components.layouts.app2')]
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
    //#[Layout('components.layouts.app2')]
    //#[Title('Create Post')]
    public function render()
    {
        return view('livewire.counter')
            //->layout('components.layouts.app2')
            /*->response(function(Response $response) {
                $response->header('XXX', true);
            })*/
            ;
    }
}
