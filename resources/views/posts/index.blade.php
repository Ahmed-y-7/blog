<x-layout>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        
                @foreach ($posts as $post)
                <div class="blog-post mb-3">
                    <h2 class="blog-post-title">
                      <a href="/posts/ {{ $post->id }}">
                        {{ $post->title }}
                      </a>
                    </h2>
                    <p class="blog-post-meta">الكاتب <a href="#">{{ $post->author }}</a>
                        {{ (Carbon\Carbon::parse($post->created_at)->diffForHumans()) }}
                    </p>
                </div>
                @endforeach



        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-3 bg-light rounded">
           <h4> دورةأساسيات لغات البرمجة </h4>
           <p> يمكنك الان الاشتراك والحصول على خصم يصل الى %50قم بتسجل الان</p>
           <form action="/mail" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" id="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"> إرسال </button>
            </div>
        </div>
    </form>
    @error('email')
    <div class="alert alert-danger alert-dismissible fade show" role="alert"> {{ $message }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"></div>
        <span aria-hidden="true">&times;</span></button>
    </div>
    @enderror



       

       
    </main><!-- /.container -->
    {!! '<script>alert("مرحبا")</sript>' !!}
    </x-layout>

