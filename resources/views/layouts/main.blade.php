<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home</title>

    <link href="{{ asset('/theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/theme/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('/theme/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/theme/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/theme/css/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element" style="text-align: center;">
                        <img alt="image" class="rounded-circle" style="width:60px;height: 70px" src="/theme/img/1.jpg"/>

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Luchack Alexey</span>
                            <span class="text-muted text-xs block">profile <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        LA
                    </div>
                </li>
                <li class="active">
                    <a href="users/list"><i class="fa fa-th-large"></i> <span class="nav-label">Users</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="/create">Create</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>


    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.9.3/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="/">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>

                </ul>

            </nav>

        </div>


@yield('content')


        <div class="footer">
            <div style="text-align: right;">
                <strong>Copyright</strong> Example site &copy; {{ date('Y') }}
            </div>
        </div>



</div>

<!-- Mainly scripts -->
<script src="{{ asset('/theme/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('/theme/js/popper.min.js') }}"></script>
<script src="{{ asset('/theme/js/bootstrap.js') }}"></script>
<script src="{{ asset('/theme/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>



    <script src="{{ asset('/theme/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('/theme/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('/theme/js/inspinia.js') }}"></script>
<script src="{{ asset('/theme/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('/theme/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>




    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [

                    {extend: 'print',
                        customize: function (win){

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>

@stack('scripts')

</body>

</html>
