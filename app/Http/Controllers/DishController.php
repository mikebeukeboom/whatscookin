<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Category;
use App\Dish_Ingredients;
use App\Ingredient;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        $categories = $category->getCategories();

        $ingredient = new Ingredient();
        $ingredients = $ingredient->getIngredients();
        return view('dishes.create', ['categories' => $categories, 'ingredients' => $ingredients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param StoreDishRequest &request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dish = Dish::create([
            'id_category' => Request()->category,
            'name' => Request()->dish_name
        ]);

        foreach (Request()->ingredient as $ingredient)
        {
            Dish_Ingredients::create([
                'id_dish' => $dish->id,
                'id_ingredient' => $ingredient
            ]);
        }

        return redirect('/dishes/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('pages.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
    }
}
