@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8 col-sm-12">
        @include('components.carTable')
    </div>

    <div class="col-lg-4 col-sm-12">
        <h2>Add new Car</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Slug</label>
                <input name="slug" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Selling Price</label>
                <input name="selling_price" class="form-control" type="number" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop