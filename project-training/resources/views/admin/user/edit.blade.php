@extends('layouts.index')

@section('content')
    <section class="content-header">
        <h1>
            Post
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
        <!-- left column -->
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Form Edit Post</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/user/' . $user->id)}}" method="POST">
                        {{csrf_field()}}
{{--                        {{$user}}--}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                                       required value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter Email" value="{{$user->email}}" required>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="exampleInputEmail1">Password Confirm</label>--}}
                            {{--                                <input type="password" class="form-control" id="cpassword-confirm" name="confirm_password"--}}
                            {{--                                       placeholder="Enter password confirm " required>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>
        </div>
    </section>

@endsection

