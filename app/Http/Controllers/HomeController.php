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
	public function interviews()
    {
        return view('interviews');
    }
	public function posts()
    {
        return view('posts');
    }
	public function videos()
    {
        return view('videos');
    }
	public function success_stories()
    {
        return view('success_stories');
    }
	public function education_awareness()
    {
        return view('education_awareness');
    }
	public function membership()
    {
        return view('membership');
    }
	public function search()
    {
        return view('search');
    }
	public function program_collaboration()
    {
        return view('program_collaboration');
    }
	public function back_page() {
		return redirect()->back();
	}
}

