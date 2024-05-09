
@extends('auth.dashboard')
@section('title')
    <h1 class="text-center text-4xl m-10">Add Recipe</h1>
@endsection

@section('content')
<div class="flex justify-center w-full">
    <form class="bg-white shadow-xl p-10 rounded-md"  action="{{ route('layouts.store')}}" method="post">
        @csrf <!-- Laravel CSRF protection, remove if not using Laravel -->
        @method("post")
        <label for="title">Title:</label><br>
        <input class="bg-slate-100  w-full p-2 border-2 border-slate-200" type="text" id="title" name="title" required><br><br>
    

        <label for="ingredients">Ingredients:</label><br>
        <textarea class="bg-slate-100  p-2 border-2 border-slate-200" id="ingredients" name="ingredients" rows="4" cols="50"></textarea><br><br>
    
        <label for="instructions">Instructions:</label><br>
        <textarea class="bg-slate-100 p-2 border-2 border-slate-200" id="instructions" name="instructions" rows="4" cols="50"></textarea><br><br>
    
        <input  class="px-4 py-2 bg-green-400 hover:bg-green-600 hover:text-white rounded-md duration-150 cursor-pointer" type="submit" value="Submit">
    </form>
</div>

@endsection