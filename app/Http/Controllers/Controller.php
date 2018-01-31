<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Support\Facades\View;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $site_settings;

    public function __construct()
    {
        // Fetch the Site Settings object
        $setting = Setting::first();
        if (isset($setting)) {
          $this->site_description = Setting::first()->description;
        } else {
          $this->site_description = false;
        }

        View::share('site_description', $this->site_description);

    }
}
