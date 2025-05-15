@extends('directeur.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Direceteur /</span> <a href="{{route('compteutilisateur')}}">Création de CompteUtilisateur</a> /</span> <a href="{{route('listeutilisateur')}}">Liste des CompteUtilisateur</a> </h4>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Account -->
                <hr class="my-0" />
                <div class="card-body">
                    <form  method="POST" action="{{route('creerutilisateur')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nom</label>
                                <input class="form-control" type="text" name="nom"/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Prenoms</label>
                                <input class="form-control" type="text" name="prenom" id="lastName"  />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text"  name="email"  />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label  class="form-label">Role</label>
                                <select  name="role" class="form-select"  aria-label="Default select example">
                                    <option  selected> Selectionnner le role de l'utilisateur </option>
                                    <option value="client">Client</option>
                                    <option value="agent">Agent</option>
                                    <option value="directeur">Directeur</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Numero de telephone</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">CIV (+225)</span>
                                    <input type="text"  name="telephone" class="form-control" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Adresse</label>
                                <input type="text" class="form-control"  name="adresse" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">lieux de naissance</label>
                                <input class="form-control" type="text" name="ville_naissance" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">date de naissance</label>
                                <input type="date" class="form-control pl-3 pr-4" name="date_naissance" placeholder="Sélectionnez une date">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent border-0 position-absolute" style="right: 10px; top: 38px;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Creer</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>
@endsection('content')
