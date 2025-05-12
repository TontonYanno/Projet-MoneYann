@extends('client.base')
@section('title', 'Transaction')
@section('content')


<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages Client /</span> Les Tansactions sur le Compte N° </h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Historique des transactions</h5>
            <div class="table-responsive ">
                <table class="table">

                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>
                                <strong>1234123</strong>
                            </td>
                            <td>Depôt</td>
                            <td><span class="badge bg-label-primary me-1"> 200k</span></td>
                            <td> 10/10/2020 </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>De</strong> <br>
                                 <strong>1234123</strong>
                            </td>
                            <td>Transfert</td>
                            <td><span class="badge bg-label-primary me-1"> 200k</span></td>
                            <td> 10/10/2020 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

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
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
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
@endsection('content')
