<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

class PageController extends Controller
{
    public function show($slug)
    {
        $page = WinkPage::whereSlug($slug)->firstOrFail();

        return view('page.show', compact('page'));
    }
}
