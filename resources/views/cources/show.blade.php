@extends('layouts.app')
@section('content')


<div class="card">
  <div class="card-header">Cources Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $cources->name }}</h5>
        <p class="card-text">Syllabus : {{ $cources->syllabus }}</p>
        <p class="card-text">Duration : {{ $cources->duration }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
