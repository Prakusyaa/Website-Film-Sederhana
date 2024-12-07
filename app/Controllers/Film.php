<?php

namespace App\Controllers;

class Film extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'List Film - Filmjir.id'
        ];
        return view('Films/listfilm', $data);
    }
}
