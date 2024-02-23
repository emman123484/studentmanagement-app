@extends('layouts.app')
@section('content')

<div class="card">
  <div class="card-header">Cources Page</div>
  <div class="card-body">

      <form action="{{ url('cources') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn bg-green-500 hover:bg-green-600 btn-success"></br>
    </form>

  </div>
</div>

@stop
