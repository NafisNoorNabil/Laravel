<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
class RecipeController extends Controller
{
    public function addrecipe(){
        
        return view("layouts.addrecipe");
    }

    public function users(){
        $users =User::with('recipes')->get();
        return view("layouts.users",["users"=>$users]);
    }

    public function dashboard(){
        $recipes =Recipe::with('user')->get();
        return view("layouts.recipes",["recipes"=>$recipes]);
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',

        ]);
        $userId = Auth::id();
        $recipe = Recipe::create([
            'title' => $request->title,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
            'user_id' => $userId,
        ]);
        return redirect(route("layouts.recipes"));
    }
}
