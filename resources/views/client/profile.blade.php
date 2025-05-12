@extends('client.base')
@section('title', 'Profile')
@section('content')
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                        aria-label="Search..." />
                </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                    <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="../assets/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">John Doe</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span
                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="auth-login-basic.html">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>

    <div class="layout-container">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-md-12">

                        <h4 class="fw-semibold py-3 mb-4"><span class="text-muted fw-light">Page Client /</span> Profile Client</h4>


                        <div class="card mb-4">
                            <h5 class="card-header">Profile Details</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                                        height="100" width="100" id="uploadedAvatar" />
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
                                            <input class="form-control" type="text" id="firstName" name="firstName"
                                                value="John" autofocus />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="lastName" class="form-label">Prenoms</label>
                                            <input class="form-control" type="text" name="lastName" id="lastName"
                                                value="Doe" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email"
                                                value="john.doe@example.com" placeholder="john.doe@example.com" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="organization" class="form-label">Organization</label>
                                            <input type="text" class="form-control" id="organization"
                                                name="organization" value="ThemeSelection" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Numero de telephone</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">CIV (+225)</span>
                                                <input type="text" id="phoneNumber" name="phoneNumber"
                                                    class="form-control" placeholder="202 555 0111" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="address" class="form-label">Adresse</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Address" />
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="state" class="form-label">lieux de naissance</label>
                                            <input class="form-control" type="text" id="state" name="state"placeholder="California" />
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="country">date de naissance</label>
                                            <input type="date" class="form-control pl-3 pr-4" name="fin"id="endDate"placeholder="Sélectionnez une date">
                                            <div class="input-group-append">
                                              <span class="input-group-text bg-transparent border-0 position-absolute" style="right: 10px; top: 38px;"></span>
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
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://themeselection.com" target="_blank"
                            class="footer-link fw-bolder">ThemeSelection</a>
                    </div>
                    <div>
                        <a href="https://themeselection.com/license/" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="footer-link me-4">Documentation</a>

                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                            class="footer-link me-4">Support</a>
                    </div>
                </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
@endsection('content')
