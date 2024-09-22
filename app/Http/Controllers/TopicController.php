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

class TopicController extends Controller
{
    use Common;
    public function index()
    {
        $topics = Topic::with('category')->get();
        return view('admin/topics', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('admin/add_topic', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'topicTitle' => 'required|string',
            'content' => 'required|string|max:1000',
            'image' => 'required|mimes:png,jpg,jpeg',
            'category_id' => 'required|exists:categories,id',

        ]);
        $data['trending'] = isset($request->trending);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, 'admin/images');
        Topic::create($data);
        return redirect()->route('topics.index');
    }


    public function show(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('admin/topic_details', compact('topic', 'categories'));
    }


    public function edit(string $id)
    {
        $topic = Topic::findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('admin/edit_topic', compact('topic', 'categories'));
    }


    public function update(Request $request, string $id)
    {
        $data = $request->validate([

            'topicTitle' => 'required|string',
            'content' => 'required|string|max:1000',
            'image' => 'sometimes|mimes:png,jpg,jpeg',
            'category_id' => 'required|exists:categories,id',
        ]);
        $data['published'] = isset($request->published);
        $data['trending'] = isset($request->trending);

        if ($request->hasFile('image')) {

            $data['image'] = $this->uploadFile($request->image, 'admin/images');
        }
        Topic::where('id', $id)->update($data);

        $categories = Category::select('id', 'category_name')->get();
        return redirect()->route('topics.index', compact('categories'));
    }


    public function destroy(string $id)
    {
        //
    }
    public function forceDelete(string $id)
    {
        Topic::where('id', $id)->forceDelete($id);
        return redirect()->route('topics.index');
    }

    public function pub(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('public/index', compact('topic', 'categories'));
    }

    public function toplist()
    {
        $topicsp = Topic::where('published', 1)->latest()->take(3)->get();
        $topiccs = Topic::where('published', 1)->where('trending', 1)->latest()->take(1)->get();
        $topics = Topic::where('published', 1)->where('trending', 1)->latest()->skip(1)->take(1)->get();
        return view('public/topics_listing', compact('topics', 'topicsp', 'topiccs'));
    }
}
