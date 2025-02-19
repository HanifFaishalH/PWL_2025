<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

    public function about() {
        return "NIM     : 2341720116 Nama    : Hanif Faishal Hilmi";
    }

    public function articles($id) {
        return "Halaman artikel dengan id: {$id} ";
    }
}
