@extends('layout.app')

@section('content')
<h1>This is home1</h1>
@include('components.Navbar')
@include('components.Hero')
@include('components.loop')
@include('components.List')
@include('components.Footer')
@endsection

