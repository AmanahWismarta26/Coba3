<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::orderBy('created_at', 'DESC');

                if (!empty($request->q)) {
                    $post->where('title', 'LIKE', '%' .$request->q. '%');
                }

                if (!empty($request->status))  {
                    $post->where('is_active', $request->status);
                }

                if (!empty($request->from_date))     {
                    $post = $post->whereBetween('created_at', [
                    Carbon::parse($request->from_date)->format(format: 'Y-m-d') . '00:00:01',
                    Carbon::parse($request->to_date)->format(format: 'Y-m-d') . '23:59:59'
                    ]);
                }

               $post = $post->paginate(10);


        return view('dashboard.post.index', [
             'data' => $post
         ]);

         
           
        }

    public function store(Request $request)
    {
        $fileName = "";
        if ($request->file('image')){
            $file = $request->file('image');

            $fileName = "image/" . date('ymdHi.'). $file->getClientOriginalExtension();
            $file->move(public_path('image'), $fileName);
    }

    $post =Post::create([
        'title' => $request->title,
        'photo' => $fileName,
        'description' => $request->description,
        'is_active' => $request->status,
        'category_id' => $request->category,
    ]);

    if ($post) {
        return redirect()->back()->with('success', 'data berhasil ditambahkan');
    } else {
        return redirect()->back()->with('eror', 'data gagal disimpan');
    }

}

    public function edit($id)
    {}

    public function update($id, Request $request)
    {}

    public function destroy($id)
    {}
    
    // public function show($id)
    // {}

}
