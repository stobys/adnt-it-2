<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/adient-favicon.ico') }}" type="image/vnd.microsoft.icon" id="favicon" />

    {{--// Combined CSS files //--}}
    <link rel="stylesheet" href="{{ asset( mix('/assets/css/combined.css') ) }}">
</head>

<body class="hold-transition sidebar-mini {{-- layout-fixed --}} layout-footer-fixed layout-navbar-fixed">
    {{--// Site wrapper //--}}
    <div class="wrapper">
        {{--// Navbar //--}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @include('skel.header-navbar')
        </nav><!-- /.navbar -->

        {{--// Main Sidebar Container //--}}
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{--// Brand Logo //--}}
            @include('skel.sidebar-logo')

            {{--// SIDEBAR //--}}
            <div class="sidebar">
                {{--// Sidebar User (optional) //--}}
                @include('skel.sidebar-user')

                {{--// Sidebar Menu //--}}
                @include('skel.sidebar-menu')
            </div><!-- /.sidebar -->
        </aside>

        {{--// Content Wrapper. Contains page content //--}}
        <div class="content-wrapper">
            {{--// Content Header (Page header) //--}}
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section><!-- /.content-header -->

            {{--// Main content //--}}
            <section class="content">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Title</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        Start creating your amazing application!
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        Footer
                    </div><!-- /.card-footer-->
                </div><!-- /.card -->




            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            @include('skel.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div><!-- ./wrapper -->

    {{--// Combined CSS files //--}}
    <script src="{{ asset( mix('/assets/js/combined.js') ) }}"></script>

    <script type="text/javascript">
        // var myAPP = new myAPP({
        //     baseUrl : '{{ URL::to('/') }}/',
        //     lang : '{{ Lang::locale() }}'
        // });

        // var appBaseUrl = myAPP.get('baseUrl');
        // var appLang = myAPP.get('lang');

        $(document)
                .ajaxStart(function () {
                    // myAPP.showLoader();
                })
                .ajaxStop(function () {
                    // myAPP.hideLoader();
                })
                .ajaxSuccess(function() {
                    // initAfterAjax();
                })
                .ajaxError(function(event, jqxhr, settings, thrownError){
                    if ( jqxhr.status == 401 )
                    {
                        window.location = window.location;
                    }
                    else {
                        console.log( 'AJAX reqest status : '+ jqxhr.status );
                    }
                });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $( document ).ready(function() {
            // initAfterAjax()
            console.log('document.ready');
        });
    </script>

</body>
</html>
