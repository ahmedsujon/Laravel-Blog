<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;
use Image;
class PostController extends Controller
{

    public function index()
    {
        $data = array(

            'posts' => Post::with(['categories', 'tags'])->orderBy('id', 'desc')->get()

        );
        return view('admin.post.index', $data);
    }

    public function create()
    {
        $data = array(
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'post' => new Post(),
        );
        return view('admin.post.create', $data);
    }

    public function store(Request $request)
    {
        dd($request->all());

        $postData = $this->validateRequest();
        $postData['slug'] = $this->createSlug($this->checkSlug($request->title));
        $postData['user_id'] = auth()->user()->id;
        $postData['published_at'] = Carbon::now();
        // $postData['tags'] = attach()->tags();
        // $postData->tags()->attach($request->tags);

        if ($request->hasFile('image')) {
            $postData['image'] = $this->uploadImage($request->file('image'));
        }
        if (Post::create($postData)) {
            Session::flash('response', array('type' => 'success', 'message' => 'Post Added successfully!'));
        } else {
            Session::flash('response', array('type' => 'error', 'message' => 'Something Went wrong!'));
        }
        return redirect()->route('post.index');

    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $data = array(
            'post' => $post,
            'categories' =>  Category::orderBy('name', 'asc')->get()
        );
        return view('admin.post.edit', $data);
    }

    public function update(Request $request, Post $post)
    {

        $postData = $this->validateRequest();
        $postData['slug'] = $this->createSlug($this->checkSlug($request->title));

        if ($request->hasFile('image')) {
            $postData['image'] = $this->uploadImage($request->file('image'));
        }

        if ($post->update($postData)) {
            Session::flash('response', array('type' => 'success', 'message' => 'Post Updated successfully!'));
        } else {
            Session::flash('response', array('type' => 'error', 'message' => 'Something Went wrong!'));
        }
        return redirect()->route('post.index');
    }

    public function destroy(Post $post)
    {
        if ($post->delete()) {
            Session::flash('response', array('type' => 'success', 'message' => 'Post deleted successfully!'));
        } else {
            Session::flash('response', array('type' => 'error', 'message' => 'Something Went wrong!'));
        }
        return redirect('post');
    }

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required|unique:posts',
            'image' => 'required|image',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }

    private function uploadImage($image)
    {
        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();
        $path = storage_path() . '/app/public/uploads/PostImage/' . $imageName;
        Image::make($image)->fit(200, 200)->save($path);
        return $imageName;
    }
    private function createSlug($title)
    {
        return $this->checkSlug(mb_strtolower(preg_replace('/[ ,.@#$%^&*()_\/=]+/', '-', trim($title)), 'UTF-8'));
    }

    private function checkSlug($slug)
    {
        $all_slugs = Post::select('slug')->where('slug', 'like', $slug . '%')->get();

        if (!$all_slugs->contains('slug', $slug)) {
            return $slug;
        }
        $i = 1;
        while ($i++) {
            $new_slug = $slug . '-' . $i;
            if (!$all_slugs->contains('slug', $new_slug)) {
                return $new_slug;
            }
        }
    }

}
