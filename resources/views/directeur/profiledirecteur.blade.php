@extends('directeur.base')
@section('content')

    <div class="row">
        <div class="col-md-12">

            <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Direceteur /</span> Profile Direceteur
            </h4>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                            width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
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
                                <label for="organization" class="form-label">Organization</label>
                                <input type="text" class="form-control" id="organization" name="organization"
                                    value="ThemeSelection" />
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
                                    placeholder="Address" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">lieux de naissance</label>
                                <input class="form-control" type="text" id="state"
                                    name="state"placeholder="California" />
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
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>

        </div>
    </div>



    <div class="content-backdrop fade"></div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
@endsection('content')
