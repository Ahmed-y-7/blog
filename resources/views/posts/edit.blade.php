<x-layout>
    <form action="/posts/{{$post->id}}" method="POST">   <!-- هذا الكود عشان يعمل التعديل والحفظ في استماره وحده-->
            @method('PATCH')
        <x-form :post="$post"/>
<button type="submit" class="btn btn-primary">تعديل</button>
</form>
</x-layout>