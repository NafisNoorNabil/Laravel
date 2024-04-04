<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class="flex items-center justify-center h-screen bg-gradient-to-br from-black to-violet-950 p-20 font-poppins">
        <div class="md:flex-row rounded-xl mx-auto shadow-2xl bg-slate-900 py-12 px-16 md:py-20 md:px-28">
            
            <h1 class="text-4xl text-white uppercase">Food <span class=" text-red-500">Place</span></h1>
            
            <form method="POST" class="text-white space-y-10" action="{{ route('auth.reg') }}">
                <h1 class="text-2xl text-gray-400">Registration</h1>
                @csrf
                <div class="flex flex-col justify-between space-y-8 ">
                    <div class="flex flex-col justify-between md:text-lg space-y-2">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="username" class="focus:outline-none focus:bg-white bg-gray-300 duration-300 rounded-sm py-2 px-4 text-black"  required autofocus>
                    </div>
                
                    <div class="flex flex-col justify-between md:text-lg space-y-2">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class=" focus:outline-none focus:bg-white bg-gray-300 duration-300 rounded-sm py-2 px-4 text-black" required>
                    </div class="flex justify-between">
                
                    <div class="flex flex-col justify-between md:text-lg space-y-2">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" class="focus:outline-none  focus:bg-white bg-gray-300 duration-300 rounded-sm py-2 px-4 text-black" required autocomplete="new-password">
                    </div class="flex justify-between">
                


                </div>
            
                <div class="flex justify-center">
                    <button type="submit" class="bg-violet-900 text-white px-8 py-2 uppercase font-semibold rounded-sm hover:bg-white hover:text-black hover:shadow-lg active:shadow-gray-400 hover:shadow-gray-600 duration-300 ">Register</button>
                </div>
            </form>
        </div>
    </section>
        

</body>
</html>