@extends('layouts.admin-layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('create-form') }}">
            <div class="form-group mb-3">
                <label for="select2Multiple">Multiple Tags</label>
                <select class="select2-multiple form-control" name="types[]" multiple="multiple" id="select2Multiple">
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                    <option value="button">Button</option>
                </select>
            </div>

            {{-- <div class="form-group mb-3">
                <label for="">Multiple Tags</label>
                <select class="form-control" name="type">
                    <option value="text">Text</option>
                    <option value="textarea">Textarea</option>
                    <option value="button">Button</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Display Name</label>
                <input class="form-control" type="text" name="name" id="">
            </div> --}}

            <button type="submit">Submit</button>
        </form>
    </section>
    <!-- /.content -->
@endsection
