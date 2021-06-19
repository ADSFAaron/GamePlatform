<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $banner_type;

    use WithFileUploads;

    public function mount()
    {
        $this->status = 0;
    }

    public function addSlide()
    {
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('sliders', $imagename);
        $slider->image = $imagename;
        $slider->status = $this->status;
        $slider->banner_type = $this->banner_type;
        $slider->save();
        session()->flash('message', 'Slider has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
