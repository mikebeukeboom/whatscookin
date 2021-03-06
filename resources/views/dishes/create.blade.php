@extends('layouts.default')
@section('content')
    <div class="container">
        <h1>NEW DISH</h1>
        <form method="post"
              action="/dishes/store">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="dishname"
                       class="col-sm-2 col-form-label">Dish Name</label>
                <div class="col-sm-10">
                    <input type="text"
                           class="form-control"
                           id="dishname"
                           name="dish_name"
                           placeholder="Dish">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"><a href="/categories/create">Categories</a></legend>
                    <div class="col-sm-10">
                        @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input"
                                       type="radio"
                                       name="category"
                                       id="gridRadios1"
                                       value="{{ $category->id }}">
                                <label class="form-check-label"
                                       for="categories">
                                    {{ $category->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-2"><a href="/ingredients/create">Ingredients</a></div>
                <div class="col-sm-10">
                    @foreach($ingredients as $ingredient)
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="gridCheck1"
                                    name="ingredient[]"
                                    value="{{ $ingredient->id }}">
                            <label class="form-check-label"
                                   for="{{ $ingredient->id }}">
                                {{ $ingredient->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit"
                            class="btn btn-outline-info">Save Dish
                    </button>
                </div>
            </div>
        </form>

    </div>
@stop
