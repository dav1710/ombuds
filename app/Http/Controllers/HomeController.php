<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contactUs()
    {
        return view('contact_us');
    }
    public function directions()
    {
        return view('directions');
    }
    public function reports()
    {
        return view('reports');
    }
    public function courses()
    {
        return view('courses');
    }
    public function cooperation()
    {
        return view('cooperation');
    }
    public function media()
    {
        return view('media');
    }
    public function about()
    {
        return view('about');
    }
    public function torture()
    {
        return view('torture');
    }
    public function soldier_rights()
    {
        return view('soldier_rights');
    }
    public function women_rights()
    {
        return view('women_rights');
    }
    public function child_rights()
    {
        return view('child_rights');
    }
    public function invalid_rights()
    {
        return view('invalid_rights');
    }
    public function statistics()
    {
        return view('statistics');
    }
    public function information()
    {
        return view('information');
    }
    public function business_rights()
    {
        return view('business_rights');
    }
	public function decisions()
    {
        return view('decisions');
    }
	public function news()
    {
        return view('news');
    }
}
