@extends('directeur.base')
@section('content')

<h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Directeur /</span> Creation de Compte</h4>

    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Creation de Compte
                    <img src="../assets/img/favicon/icon.png" alt="">
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Moneyann</span>
                </h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Client</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected > Selectionnner l'identité du demandeur </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Creer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection('content')
