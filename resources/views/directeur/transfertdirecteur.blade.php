@extends('directeur.base')
@section('content')
    <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Directeur /</span> Transferts</h4>

    <div class="card mb-4">
        <h5 class="card-header">Transfert de l'argent vers un autre compte </h5>
        <div class="card-body">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-md-3">
                    <label class="form-label" for="selectTypeOpt">Numero de compte</label>
                    <input type="text" class="form-control" name="destinataire" autofocus />
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="selectTypeOpt">Numero de compte destinataire</label>
                    <input type="text" class="form-control" name="destinataire" autofocus />
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="selectPlacement">Placement</label>
                    <input type="number" class="form-control" name="prix" autofocus />

                </div>
                <div class="col-md-3">
                    <label class="form-label" for="showToastPlacement">&nbsp;</label>
                    <button id="showToastPlacement" class="btn btn-primary d-block">Envoyé</button>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
