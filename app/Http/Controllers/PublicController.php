<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Traits\Common;
use Carbon\Traits\Cast;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::with(['topics'])->get();
        return view('public/index', compact('categories'));
    }
    public function show(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('public/index', compact('topic', 'categories'));
    }
    public function browse()
    {
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->take(3);
        }])->limit(4)->get();
        return view('public/index', compact('categories'));
    }
    public function topicsDetails(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('public/topics_detail', compact('topic', 'categories'));
    }

    public function salad()
    {

        $testimonials = Testimonial::where('published', 1)->take(3)->get();
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->take(3);
        }])->limit(4)->get();
        return view('public/index', compact('categories', 'testimonials'));
    }

    public function top()
    {

        $topics = Topic::where('published', 1)->latest()->take(1)->get();
        $topiccs = Topic::where('published', 1)->latest()->skip(1)->take(1)->get();
        $testimonials = Testimonial::where('published', 1)->take(3)->get();
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)->take(3);
        }])->get();
        return view('public/index', compact('topics', 'topiccs', 'categories', 'testimonials'));
    }
}
