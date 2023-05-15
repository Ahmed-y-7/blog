<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/posts" method="POST">   <!-- هذا الكود عشان يعمل الانشاء والحفظ في استماره وحده-->
        <x-form />   <!-- form.bladeهذ الوسم يدل انو اربط مع بيانات او كود ملف -->
        <button type="submit" class="btn btn-primary">حفظ</button>   <!--هذا المود عشان يظهر زر الحفظ  -->
    </form>
    
</div>
    
</body>
</html>