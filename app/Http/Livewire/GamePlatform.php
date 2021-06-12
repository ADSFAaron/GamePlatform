<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use App\Models\Product;
use Livewire\Component;

class GamePlatform extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();
        $latest_products = Product::inRandomOrder()->limit(8)->get();
        return view('livewire.game-platform', ['latest_products' => $latest_products, 'sliders' => $sliders])->layout('layouts.base');
    }
}
