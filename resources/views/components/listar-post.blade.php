<div>
    
@if ($posts -> count())

<div class=" grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach ($posts as $post )
    <div class="">
        <a href="{{route('posts.show',['post'=> $post, 'user'=> $post -> user])}}"> <img src="{{asset('uploads') . '/' . $post->imagen}}"
             alt="Imagen del Post {{$post->titulo}}" ></a>
    </div>
    @endforeach
</div>

<div class="my-10">
    {{$posts->links('pagination::tailwind')}}
</div>

@else

<p class="text-center"> No hay Post, Sigue a alguien para poder ver Post! </p>

@endif


</div>