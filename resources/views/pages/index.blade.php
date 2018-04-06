@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/owl.carousel.min.css') }}">
    <meta name="description" content="{{$page->meta_description}} ">
    <meta name="keywords" content="{{$page->meta_keywords}}">
    <style>
     .blog-content{
         margin-top:80px;
     }
    </style>
@endsection
@section('content')

<div class="container blog-content">
        <h4 class="mt-5">
                {{$page->title}}
        </h4>
        <hr>
        <div class="content mt-4">
            {!!$page->body!!}
        </div>

</div>
@endsection






