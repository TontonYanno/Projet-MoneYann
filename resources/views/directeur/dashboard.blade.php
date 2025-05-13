@extends('directeur.base')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

BIENVENU SUR L'ESPACE DIRECTION DE LA PLATEFORME
@endsection('content')
