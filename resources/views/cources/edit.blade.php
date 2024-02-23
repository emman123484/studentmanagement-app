@extends('layouts.app')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('cources/' .$cources->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cources->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$cources->name}}" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$cources->syllabus}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$cources->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn  bg-green-500 hover:bg-green-600 btn-success"></br>
    </form>

  </div>
</div>

@stop
