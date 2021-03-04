<?php

namespace App\Http\Controllers\avatar;

use Illuminate\Routing\Controller;

class AvatarController extends Controller
{
    public function index()
    {
        return view('pages.avatars.index');
    }

    /**
     * Api used to generate avatars: https://avatars.dicebear.com/docs/http-api
     */
    public function create()
    {

        return view('pages.avatars.create');
    }

    public function store()
    {

    }
}
