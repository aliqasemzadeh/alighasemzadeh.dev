<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Wink\WinkPage;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        if(Cache::has('pages_' . App::getLocale())) {
            $pages = Cache::get('pages_' . App::getLocale());
        } else {
            $pages = WinkPage::where('language', App::getLocale())->get();
            Cache::put('pages_' . App::getLocale(), $pages, 60);
        }

        return view('layouts.app', ['pages' => $pages]);
    }
}
