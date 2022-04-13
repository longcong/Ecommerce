@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category }}" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug:</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12">
                        <label for="">Description:</label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Image:</label>
                        <input type="file" name="image" alt="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Status:</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6">
                        <label for="">Popular:</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title:</label>
                        <textarea name="meta_title" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Keywords:</label>
                        <textarea name="meta_keywords" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Description:</label>
                        <textarea name="meta_descrip" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection