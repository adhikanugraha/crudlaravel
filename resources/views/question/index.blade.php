@extends('adminlte.master')

@section('content')
<a href="/pertanyaan/create" class="btn btn-info" role="button" >Create New question</a>
<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($questions as $key=> $question)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{ $question->judul}}</td>
        <td>{{ $question->isi}}</td>
        <td>
            <a href="/jawaban/{{$question->id}}" class="btn btn-sm btn-info">Jawab</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection