@extends('agent.base')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
Bienvenu sur votre Espace Agent de la plateforme
@endsection('content')
