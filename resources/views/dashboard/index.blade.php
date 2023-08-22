@extends('layouts.index')
@section('content')
    <?php 
        $title = 'Home';
    ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h3>Hai, Selamat Datang {{ Auth::user()->name }}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5>Yuk daftar nikah dengan cara klik</h5> <a href="{{ route('nikah.create') }}" class="btn btn-primary">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection