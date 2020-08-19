@extends('layouts.index')

@section('content')

    <section class="content-header">
        <h1>
            User
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Form Created User</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('storeUser')}}" method="POST">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Position</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="0">User Normal</option>
                                    <option value="1">Super Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                                       placeholder="Enter confirm password" required>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

                <!-- Form Element sizes -->


            </div><!--/.col (left) -->
            <!-- right column -->
            <!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->

    <!-- Main content -->
    <section class="content">
@endsection
