@extends('layouts.default')
@section('content')
    <div class="container">
        <h1>NEW CATEGORY</h1>
        <form method="post"
              action="/categories/store">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="categoryname"
                       class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <input type="text"
                           class="form-control"
                           id="categoryname"
                           name="name"
                           placeholder="Category">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info">Create Category</button>
        </form>
    </div>
@stop
