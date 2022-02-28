<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $sub_title;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;

    public function mount($slider_id){
        $slider = HomeSlider::find($slider_id);
        $this->title = $slider->title;
        $this->sub_title = $slider->sub_title;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;

    }

    public function updateSlide(){
        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->price = $this->price;
        $slider->link = $this->link;
        if($this->newimage){
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('sliders',$imageName);
            $slider->image = $imageName;
        }
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message', 'Slider has been updated successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.base');
    }
}
