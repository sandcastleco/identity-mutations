<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{

    public function store()
    {

      $this->validate(request(), [
        'description' => 'required'
      ]);

      $setting = new Setting;

      $setting->description = request('description');
      $setting->save();

      return redirect('/settings');

    }

    public function edit()
    {
      $setting = Setting::first();
      return view('settings.edit', ['setting' => $setting, 'title' => 'Edit Settings']);
    }

    public function update()
    {
      $setting = Setting::first();

      $setting->description = request('description');
      $setting->update();

      return redirect('/');
    }

}
