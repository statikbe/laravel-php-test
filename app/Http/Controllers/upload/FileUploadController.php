<?php

namespace App\Http\Controllers\upload;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FileUploadController extends Controller
{
    public function index()
    {

        return view('pages.files.index');

    }

    public function store(Request $request)
    {

    }
}
