@extends('franchiseur.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">
 <script src="{{asset('js/vendor/tinymce/jquery.tinymce.min.js')}}"></script>
 <script src="{{asset('js/vendor/tinymce/tinymce.min.js')}}"></script>
 <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
@endsection

@section('content')
@php
 $franchiseur = Auth::guard('franchiseur')->user();
@endphp
  <form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
  </form>
                                        
@endsection

@section('script')
<script>
      

</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection