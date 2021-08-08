<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminSettingComponent extends Component
{
    use WithFileUploads;
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twitter;
    public $facebook;
    public $instagram;
    public $youtube;
    public $slogan;
    public $logo;

    public function mount()
    {
        $setting = Setting::find(1);
        if ($setting) {
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twitter = $setting->twitter;
            $this->facebook = $setting->facebook;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
            $this->slogan = $setting->slogan;
            $this->logo = $setting->logo;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'map' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'slogan' => 'required',
        ]);
    }

    public function saveSettings()
    {
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'map' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'slogan' => 'required',
        ]);

        $setting = Setting::find(1);
        if (!$setting) {
            $setting = new Setting();
        }
        
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->twitter =  $this->twitter;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->youtube = $this->youtube;
        $setting->slogan = $this->slogan;
        $imageName = Carbon::now()->timestamp . '.' . $this->logo->extension();
        $this->logo->storeAs('logo', $imageName);
        $setting->logo = $imageName;
        $setting->save();
        session()->flash('message', 'Settings has been saved successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
