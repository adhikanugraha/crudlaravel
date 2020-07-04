@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3"></div>
<h3>jawaban</h3>  
@foreach($answer as $key=> $answer)
<p>{{$answer->isi}}</p>
@endforeach
@endsection