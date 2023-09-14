@extends('layouts.app')


@section('content')

   <h1>Liste des articles </h1>

     @foreach($posts as $post)

      <h3>{{ $post }}</h3>
     
     @endforeach

@endsection