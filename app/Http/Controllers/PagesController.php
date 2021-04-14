<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// connecting Message Model
use App\Models\Message;

class PagesController extends Controller
{
    // Index /URL method
    public function index() {

        return view('pages.home');

    }

    // about page method
    public function about() {
        
        return view('pages.about');

    }

    // contact page method
    public function contact() {
        
        return view('pages.contact');
        
    }
    
}
