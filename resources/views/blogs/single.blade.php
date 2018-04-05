@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/home.css') }}">
    <style>
        .blog-image{
            max-width:100%;
            margin:0 auto;
        }
        .fc-blog {
            margin-top:80px;
        }
    </style>
@endsection
@section('content')
    <div class="container fc-blog">
          <div class="text-center">
             <img src="{{voyager::image($post->image)}} " alt="" class="blog-image">
        </div>
         <div class="blog-content mt-4">
               {!! $post->body !!}
         </div>
    </div>
@endsection