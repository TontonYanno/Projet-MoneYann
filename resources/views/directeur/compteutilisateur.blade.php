@extends('directeur.base')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Direceteur /</span> Création de CompteUtilisateur</h4>
            </h4>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->

                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nom</label>
                                <input class="form-control" type="text" id="firstName" name="firstName" value="John"
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Prenoms</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="john.doe@example.com" placeholder="john.doe@example.com" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="organization" class="form-label">Role</label>
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option selected> Selectionnner le role de l'utilisateur </option>
                                    <option value="1">Client</option>
                                    <option value="2">Agent</option>
                                    <option value="3">Directeur</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Numero de telephone</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">CIV (+225)</span>
                                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                        placeholder="202 555 0111" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Adresse</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="adresse" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">lieux de naissance</label>
                                <input class="form-control" type="text" id="state"
                                    name="state"placeholder="Bouake" />
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">date de naissance</label>
                                <input type="date" class="form-control pl-3 pr-4" name="fin"id="endDate"
                                    placeholder="Sélectionnez une date">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent border-0 position-absolute"
                                        style="right: 10px; top: 38px;"></span>
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
