<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public $post;
    public $comments;
    /**
     * Create a new component instance.
     */
    public function __construct($post, $comments)
    {
        $this->post = $post;
        $this->comments = $comments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <div {{$attributes}}>
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                
                        <div class="blog-post mb-3">
                            <h2 class="blog-post-title">
                                {{ $post->title }}
                            </h2>
                            <p class="blog-post-meta">
                                بكتابة {{ $post->author }}
                                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                            </p>
                            <p>
                                {{ $post->body }}
                            </p>
                            <h1>التعليقات </h1> 
                            @if(count($comments) == 0)
                            <h3>لايوجد تعليقات </h3>
                            @else
                            @foreach($post-> comments as $comment)                    <!--  ($post->comments()->get() as $comment):  كدا راح يعرض كل الكومنت بدون اخذ الموافقه من الادمن-->
                            <h4>
                                {{ $comment->name }}
                            </h4>
                            <p>
                                {{ $comment->body }}
                            </p>
                            <p>
                                {{ $comment->created_at }}
                            </p>
                                @endforeach
                            @endif
                            <a class="btn btn-primary" href="/posts/{{$post->id}}/edit">تعديل المقالة </a>
                        <h3>أضف تعليقك </h3>
                        </div>
                        <x-createComment :post="$post" />
            
            
            
               
blade;
    }
}
