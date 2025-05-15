@extends('directeur.base')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Direceteur /</span> <a href="{{route('compteutilisateur')}}">Création de CompteUtilisateur</a> /</span> <a href="{{route('listeutilisateur')}}">Liste des CompteUtilisateur</a> </h4>

            <div class="card mb-4">
                <h5 class="card-header">Liste des Comptes Utilisateurs</h5>

               <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Photo</th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                       @foreach ( $users as $user )

                       <tr>
                           <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> {{$user['nom']}} </strong></td>
                           <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xxl pull-up" >
                              <img src="{{$user['photo']}}" alt="Avatar" class="rounded-circle" />
                            </li>
                        </ul>
                    </td>
                    <td><span class="">{{$user['role']}}</span></td>
                    <td>
                        <div class="">
                            <a class="btn btn-info" href="#"><i class='bx bx-info-circle bx-tada' style='color:#f1f1f1'></i> </a>
                            <a class="btn btn-success" href="#"><i class='bx bx-edit-alt bx-tada' style='color:#f1f1f1' ></i> </a>
                            <a class="btn btn-danger" href="#"><i class='bx bx-trash bx-tada' style='color:#f1f1f1' ></i> </a>
                        </div>
                    </td>
                </tr>
                @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>

        </div>
    </div>
@endsection('content')
