<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";

        return view('home', compact('title'));
    }

    public function profil()
    {
        $nama = "Smart S Sagala";
        $npm = "238160053";

        return view('profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area";
        $prodi = "Teknik Informatika";

        return view('pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skills = [
            "PHP",
            "Laravel",
            "HTML",
            "CSS",
            "JavaScript",
            "MySQL"
        ];

        return view('keahlian', compact('skills'));
    }
}