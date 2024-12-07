<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home Page - Filmjir.id'
        ];
        return view('Main/home', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Page - Filmjir.id'
        ];
        return view('Main/about', $data);
    }
}
