@extends('layouts.main-layout')
@section('content')

  <h1>HOME:</h1>
  <a href="{{ route('paganti-index') }}">Paganti</a><br>
  <a href={{ route('pagamenti-index') }}>Pagamenti</a>
@endsection
