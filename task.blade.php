@extends('layouts.app')

@section('content')

<form action="/task/{{$task->id}}" method="POST">

    <div id="myDIV" class="header">

      @csrf

      @method('PUT')

      <h2>My To Do List</h2>

      @error('title')

        <div class="alert alert-danger">{{ $note }}</div>

      @enderror

      <input class="@error('title') is-invalid @enderror" value="{{$task->title}}" name="title" type="text" placeholder="Title...">

      <button type="submit" class="addBtn">Update</button>

    </div>

</form>

@endsection