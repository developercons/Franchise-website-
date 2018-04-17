
</html>
@extends('franchiseur.layout.app')

@section('style')
 <link rel="stylesheet" href="{{asset('/css/candidat.css')}} ">

  
 <!-- include summernote css/js-->
 <link href="{{asset('js/summernote/summernote.css')}} " rel="stylesheet">

<style>
.btn-light , .btn-light.dropdown-toggle {
    background-color: #3877ae !important;
} 
.note-toolbar {
    text-align : center;
}
.note-editor ,  .note-toolbar {
    background: #f6f6f7;
}

</style>
  
@endsection

@section('content')
<div class="container">
<textarea class="summernote" id="" cols="30" rows="50"></textarea>
            
</div>                            
@endsection

@section('script')
<script src="{{asset('js/popper.min.js')}} "></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}} "></script> 
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/summernote/summernote.min.js')}} "></script> 
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 800, 
            });
        });
</script>
<script src="{{asset('js/candidat.js')}}"></script>
@endsection