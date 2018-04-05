@extends('layout.app')
 
@section('style')
    <link rel="stylesheet" href= "{{ asset('css/home.css') }}">
    <style>
        .blog-image{
            max-width:100%;
            margin:0 auto;
        }
        .fc-blog {
            margin-top: 150px;
        }
        .list-group-item a{
            color:black;
        }
        .list-group-item a :hover{
            background : #f1f1f3;
            cursor:pointer;
        }
        .list-group-item:hover{
            background : #f1f1f3;
            cursor:pointer;
        }
    </style>
@endsection
@section('content')
    <div class="container fc-blog">
            <h4>Blogs</h4>
            <ul class="list-group list-group-flush mt-5">
                @foreach($blogs as $blog)
                     <li class="list-group-item">
                        <a href="{{url('blogs/'.$blog->slug)}} ">
                            <h4>{{$blog->title}} </h4>
                            <p class="lead small">{{$blog->excerpt}} </p>
                        </a>
                     </li>
                @endforeach
            </ul>      

         <div class="text-center">
             {{ $blogs->links() }}
         </div>
    </div>
@endsection