<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class GamePlatform extends Component
{
    public function render()
    {
        $latest_products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.game-platform', ['latest_products' => $latest_products])->layout('layouts.base');
    }
}
