<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {

        return view('welcome');

    }
    public function merchandising(){

            return view('merchandising');

        }
        public function about_us(){

            return view('about_us');
        }
}
