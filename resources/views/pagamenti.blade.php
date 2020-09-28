@extends('layouts.main-layout')
@section('content')

  <div id="content">
    <h1>Pagamenti:</h1>
    <ul>
      @foreach ($pagamenti as $pagamento)
        <li>
          <strong>{{$pagamento -> status}}</strong>:
          {{$pagamento -> price}}$
          <a href={{ route('pagamento-edit', $pagamento -> id)}}>EDIT</a>
          <a href={{ route('pagamento-delete', $pagamento -> id)}}>X</a>
        </li>
      @endforeach
    </ul>
  </div>

@endsection
