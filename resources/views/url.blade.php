@extends("layout")
@section('content')
<h1>Órai feladat</h1>
<p>Név:{{$post->sajatnev}}</p>
<p>Cím:{{$post->cim}}</p>
<p>Évfolyam:{{$post->hanyadev}}</p>
@endsection