@extends('directeur.base')

@section('content')
    <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Directeur /</span> Depôt</h4>

    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">
                Effectuer un dépot sur un compte
                <img src="../assets/img/favicon/icon.png" alt="">
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Moneyann</span>
            </h5>

            <div class="card-body demo-vertical-spacing demo-only-element">
                <div class="input-group">
                    <span class="input-group-text">Numero du Compte </span>
                    <input type="text" aria-label="First name" class="form-control" />
                </div>

                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                    <input type="text" class="form-control"aria-label="Dollar amount (with dot and two decimal places)" />
                </div>
                <a class="btn btn-primary" href="#"><i class='bx bx-plus bx-flip-horizontal bx-tada' style='color:#FFF' ></i> Deposer</a>
            </div>
        </div>
    </div>
@endsection('content')
