<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $readme = base_path('readme.md');
        if ($readme) {
            $contents = File::get($readme);
            return view('pages.home', ['contents' => $contents, 'title' => 'Welcome']);

        }

        return response()->isNotFound();
    }

    public function level ($level) {
        $readme = base_path('documentation/' . $level);
        if ($readme) {
            $contents = File::get($readme);

            return view('pages.home', ['contents' => $contents, 'title' => $level]);
        }

        return response()->isNotFound();
    }
}
