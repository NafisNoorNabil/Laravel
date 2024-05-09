



@extends('auth.dashboard')


@section('title')
<h1 class="text-center text-4xl m-10">Recipes</h1>
<a href="/addrecipe" class="inline-block">
    <button class="px-4 py-2 m-5 shadow-lg bg-lime-400 hover:text-white hover:bg-lime-600 duration-150 rounded-md">
      Add Recipe <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
  </a>
@endsection

@section('content')

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr class="bg-gray-50">
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Recipe ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ingredients</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Instructions</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($recipes as $recipe)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{$recipe->id}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$recipe->title}}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                @if(is_array($recipe->ingredients))
                    @foreach($recipe->ingredients as $ingredient)
                        <li>{{$ingredient}}</li>
                    @endforeach
                @else
                    {{$recipe->ingredients}}
                @endif
            </td>
            <td class="px-6 py-4 whitespace-nowrap">{{$recipe->instructions}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{$recipe->user->name}}</td>
        </tr>
        
        @endforeach

    </tbody>
</table>

    @for ($i = 0; $i < 3; $i++)
        @push('st')
            <img src="login.jpg" class="w-64 m-5 shadow-2xl">
        @endpush
    @endfor





@endsection


