@extends('layouts.main-layout')
@section('content')

  <div id="content">
    <h1>Pagamenti:</h1>
    <ul>
      @foreach ($pagamenti as $pagamento)
        <li>
          <strong>{{$pagamento -> status}}</strong>:
          {{$pagamento -> price}}$
        </li>
      @endforeach
    </ul>
  </div>

@endsection
