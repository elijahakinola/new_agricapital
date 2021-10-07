<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index() {
        return view ('welcome');
    }
    public function about_us() {
        return view ('about_us');
    }
    public function services() {
        return view ('services');
    }
    public function farmers_corner() {
        return view ('farmers_corner');
    }
    public function media() {
        return view ('media');
    }
    public function contact_us() {
        return view ('contact_us');
    }
    public function faq() {
        return view ('faq');
    }
    public function steps_to_register() {
        return view ('steps_to_register');
    }
    public function application_form() {
        return view ('application_form');
    }
    public function news() {
        return view ('news');
    }
    public function gallery() {
        return view ('gallery');
    }
}
