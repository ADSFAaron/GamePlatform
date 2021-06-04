<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GamePlatform extends Component
{
    public function render()
    {
        return view('livewire.game-platform')->layout('layouts.base');
    }
}
