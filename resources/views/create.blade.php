@extends('layouts.main')

@section('content')

    <link href="/theme/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/theme/css/plugins/datapicker/datepicker3.css" rel="stylesheet">





    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Create User</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Create User</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">




        <div class="row">

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>User <small>form</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <form method="post" action="/create">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="ibox-content">
                        <div class="form-group">
                            <label class="font-normal">Name</label>
                            <div  class="input-group">
                                <input type="text" name="name"  class="form-control" placeholder="" maxlength="60" required>
                            </div>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="form-group">
                            <label class="font-normal">Surname</label>
                            <div  class="input-group">
                                <input type="text" name="surname"  class="form-control" placeholder="" maxlength="60" required>
                            </div>
                        </div>
                    </div>


                    <div class="ibox-content">

                        <div class="form-group" id="data_1">
                            <label class="font-normal">Date of birthday</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="dob" class="form-control" value="03/04/2014">
                            </div>
                        </div>

                    </div>

                    <div class="ibox-content">
                        <div class="form-group">
                            <label class="font-normal">Phone</label>
                            <div  class="input-group">
                                <input type="text" name="phone" class="form-control" data-mask="(999)999-9999" placeholder="" required>
                            </div>
                        </div>
                    </div>


                    <div class="ibox-content">
                        <div class="form-group">
                            <label class="font-normal">Email</label>
                            <div  class="input-group">
                                <input type="email" name="email"  class="form-control" placeholder="" maxlength="30" required>
                            </div>
                        </div>
                    </div>

                        <div class="ibox-content">
                            <div class="form-group">
                                <div  class="input-group">
                                    <input type="submit" value="Send" class="btn btn-sm btn-success">
                                </div>
                            </div>
                        </div>

                        </form>
                </div>


            </div>

        </div>


    </div>

    @push('scripts')
    <!-- Data picker -->
    <script src="/theme/js/plugins/datapicker/bootstrap-datepicker.js"></script>


    <!-- Input Mask-->
    <script src="/theme/js/plugins/jasny/jasny-bootstrap.min.js"></script>




    <script type="application/javascript">

        $(document).ready(function() {

            var mem = $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });



        });

    </script>

    @endpush

@stop