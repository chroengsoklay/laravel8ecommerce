<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class AdminSettingComponent extends Component
{
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $facebook;
    public $instagram;
    public $pinterest;
    public $twitter;
    public $youtube;

    public function mount(){
        $setting = Setting::find(1);
        if($setting){
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->facebook = $setting->facebook;
            $this->instagram = $setting->instagram;
            $this->pinterest = $setting->pinterest;
            $this->twitter = $setting->twitter;
            $this->youtube = $setting->youtube;
        }
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
            'address' => 'required',
        ]);
    }
    public function saveSettings(){
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
            'address' => 'required',
        
        ]);

        $setting = Setting::find(1);
        if(!$setting){
            $setting = new Setting();
        }
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->pinterest = $this->pinterest;
        $setting->twitter = $this->twitter;
        $setting->youtube = $this->youtube;

        $setting->save();

        session()->flash('setting_message', 'Setting has been updated.');
    }

    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
