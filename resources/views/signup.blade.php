<!DOCTYPE html>
<html {{ App::currentLocale() == 'ar' ? 'dir=rtl lang=ar': 'dir=ltr lang=en'}}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--يستخدم تصميم بوتستراب اذا كان صفحة الموقع عربي  -->
    @if (App::currentlocale() == 'ar')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <!-- fount google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@700&family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Noto Naskh Arabic';}
        h1 { font-family: 'Noto Kufi Arabic'; font-weight: 700}
    </style>
    @else
    <!--اذا كان صفحة الموقع انجليزي يستخدم تصميم الصفحة بالانجليزي -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @endif
</head>
<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h2 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">{{ __('Welcome to our website') }}</h2>
            <p class="col-lg-10 fs-4">{{ __('You can now Sign up and start the courses') }}</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" wfd-id="id0">
                <label for="floatingInput">{{ __('Email address') }}</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" wfd-id="id1">
                <label for="floatingPassword">{{ __('Password') }}</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">{{__('Sign up') }}</button>
              <hr class="my-4">
              <small class="text-body-secondary">{{ __('By clicking Sign up, you agree to the terms of use.') }}</small>
            </form>
          </div>
        </div>
      </div>
</body>
</html>