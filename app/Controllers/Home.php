<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function cab($data=[])
    {
        $data['title'] = 'Observatório Inteligente da Sociobiodiversidade (OBIS)';
        $data['description'] = 'Welcome to the Observatório Inteligente da Sociobiodiversidade (OBIS)';
        $sx = view('header/header', $data);
        $sx .= view('header/navbar', $data);
        return $sx;
    }

    public function index()
    {
        $sx = $this->cab();
        $sx .= view('gadget/paralax', [
            'title' => 'Parallax Effect',
            'description' => 'This is a parallax effect example using Bootstrap and CodeIgniter 4.'
        ]);
        $sx .= view('gadget/logo_png');

        $sx .= view('header/footer');
        return $sx;
    }
}
