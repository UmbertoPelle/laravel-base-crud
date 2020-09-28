@extends('layouts.main-layout')
@section('content')
  <h1>Update:</h1>
  <br><br>
  <form action={{ route('pagamento-update', $pagamento -> id)}} method="post">
    @csrf
    @method('POST')
    <div>
      <label for="status">STATUS:</label><br>
      <select name="status">
        <option value="accepted">ACCEPTED</option>
        <option value="rejected">REJECTED</option>
        <option value="pending">PENDING</option>
      </select>
    </div>
    <div>
      <label for="price">PRICE:</label><br>
      <input type="text" name="price" value={{ $pagamento -> price}}>
    </div>
    <button type="submit" name="button">UPDATE</button>
  </form>

@endsection
