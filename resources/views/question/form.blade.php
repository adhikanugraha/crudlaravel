@extends('adminlte.master')

@section('content')
<form action="/pertanyaan" method="POST" class="ml-3  mr-3">
    @csrf
  <div class="form-group">
    <label for="judul">judul pertanyaan:</label>
    <input type="text" class="form-control" name="judul" placeholder="masukan pertanyaan" id="judul">
    <label for="isi"> pertanyaan:</label>
    <input type="text" class="form-control" name="isi" placeholder="masukan pertanyaan" id="isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection