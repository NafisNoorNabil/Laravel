



<nav class=" hidden md:block flex-row bg-[rgb(5,11,5)]  text-white font-nunito p-10  pt-12 space-y-10 h-screen">
    <h1 class="text-xl md:text-2xl font-light text-center uppercase">Food <span class="text-red-800">Place</span></h1>
    <ul class="flex flex-col tracking-wide text-lg space-y-8">
        <div class="flex items-center">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
            <li><a class="hover:px-4 duration-200 hover:text-[#45B88B] p-2" href="/dashboard">Recipes</a></li>
        </div>
        <div class="flex items-center ">
            <i class="fa fa-user" aria-hidden="true"></i>
            <li><a class="hover:px-4 duration-200 hover:text-[#45B88B] p-2" href="/users"">Users</a></li>
        </div>

        <hr>
        <li>
            <form method="POST" action="{{route("auth.destroy")}}" >
                @csrf
                <button type="submit" class="hover:px-6 duration-200 hover:bg-red-800 p-2" >Logout</button>
            </form>
        </li>
    </ul>
</nav>

