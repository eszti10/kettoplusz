@extends("layout")
@section('content')
<form action="/varos" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Város: </label>
      <input type="text" class="form-control" name="name" id="name"  placeholder="Város">

    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
  </form>

@endsection
