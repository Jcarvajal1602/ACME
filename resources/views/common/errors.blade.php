<br>
@if ($errors ->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p>{{$error}}</p> 
</div>
    @endforeach
@endif