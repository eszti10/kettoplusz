@extends("layout")
@section('content')
<form action="/legitarsasag" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Repülő társaság neve: </label>
      <input type="text" class="form-control" name="name" id="name"  placeholder="Repülő társaság neve">

    </div>
    <div class="form-group">
      <label for="origin">Repülő társaság központ:</label>
      <input type="text" class="form-control" name="origin" id="origin" placeholder="Repülő társaság központ">
    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
  </form>
@endsection
