@extends('layouts.main')

@section('container')
        <div class="row bg-primary p-3 text-light">
            <h2>Selamat datang {{Auth::user()->name}}</h2>
          </div>
        <div class="row bg-primary p-3 text-light">
            <h5>Mulai konsultasi bakat</h5>
            <a href="/info"><button class="btn btn-warning btn-lg" type="submit"> Test</button></a>
          </div>
@endsection