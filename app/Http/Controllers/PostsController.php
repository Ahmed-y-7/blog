<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()                // لعرض قائمة المصادرindex يستخدم 
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()           // يستخدم لانشاء نموذج المصدر
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)     //يستخدم لتخزين البيانات 
    {
       $this->validateRequired();
            Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/posts');         //هذا الكود معنى بعد مايقوم انشاء النموذج يرجعه على الصفحة الرئيسية 
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)        //يقرا عمليات المصدر
    {
        $comments = $post->comments()->where(['approved' => 1])->get();
        return view('posts.show', compact(['post', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)       //يستخدم لعرض استمارات المصدر
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     
     */
    public function update(Post $post)       //يستخدم لتحديث البيانات المصدر 
    {
        $this->validateRequired();
        $post->update([
            'title' => request('title'),
            'body' => request('body'),
            'author' => request('author')
        ]);
        return redirect('/posts/'. $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)          //يستخدم لحذف عمليات المصدر
    {
        //
    }

    // هذي المعادلة عشان يتحقق من رسايل الاستماره وعشان نستخدمها في المعادلات ثانيه بدون مانكرر الكود نفسه 
    public function validateRequired()
    {
        request()->validate([
            'title' => ['required', 'unique:posts', 'max:100'],
            'body' => 'required',
            'author' => 'required'
        ]);
    }
}
