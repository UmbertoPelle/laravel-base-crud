@extends('layouts.main-layout')
@section('content')

  <div id="content">
    <h1>{{$title}}</h1>
    <ul>
      @foreach ($paganti as $pagante)
        <li>
          {{$pagante -> name}}
          {{$pagante -> lastname}}
        </li>
      @endforeach
    </ul>
  </div>

@endsection
