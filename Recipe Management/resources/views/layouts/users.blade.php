





@extends('auth.dashboard')
@section('title')
    <h1 class="text-center text-4xl m-10">Users</h1>

@endsection

@section('content')
<table class="min-w-full text-center">
    <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Recipe posted</th>
        
        </tr>
    </thead>
    @php
        $userCount = 0;
    @endphp

    @forelse($users as $user)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{$user->recipes()->where('user_id', $user->id)->count()}}</td>
        @php
            $userCount++;
        @endphp
    </tr>
    @empty
        <tr>
            <td class="px-6 py-4 whitespace-nowrap" colspan="5">No recipes found.</td>
        </tr>
    @endforelse
    <tr class="font-bold ">
        <td>   
            @if($userCount > 0)
                <h1>Total Users: {{$userCount}}</h1>
            @endif
        </td>
    </tr>

  </table>




@endsection




