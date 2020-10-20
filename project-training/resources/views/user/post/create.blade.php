@extends('layouts.index')

@section('content')

    <section class="content-header">
        <h1>
            Post
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Post</a></li>
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
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Form Created Post</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{Route('storePost')}}" method="POST">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Title"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
@endsection
