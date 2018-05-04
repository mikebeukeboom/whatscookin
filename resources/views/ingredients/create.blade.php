@extends('layouts.default')
@section('content')
    <div class="container">
        <h1>NEW INGREDIENT</h1>
        <form method="post"
              action="/ingredients/store">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="ingredientname"
                       class="col-sm-2 col-form-label">Ingredient: </label>
                <div class="col-sm-10">
                    <input type="text"
                           class="form-control"
                           id="ingredientname"
                           name="name"
                           placeholder="Ingredient">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-info">Create Ingredient</button>
        </form>
    </div>
@stop
