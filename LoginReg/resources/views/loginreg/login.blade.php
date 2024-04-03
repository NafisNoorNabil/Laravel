<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class="flex items-center h-screen bg-[rgb(144,184,184)] font-poppins">
        <div class="flex flex-col md:flex-row rounded-md mx-32 drop-shadow-2xl">
            <img class="object-cover md:rounded-l-xl md:rounded-r-none 
            duration-300 md:w-1/2" 
            src="login.jpg" alt="">
            <div class="bg-white  flex  md:w-1/2 justify-center items-center md:rounded-xl md:rounded-l-none">
                <form method="POST" action="{{route("loginreg.loginPost")}}" class="md:space-y-10 space-y-6 pb-10">
                    @csrf
                    <h1 class="text-3xl md:text-5xl uppercase">Food <span class="text-red-800">Place</span></h1>
                    
                    <div>
                        <label for="email">Email</label>
                        <input id="email"  class="bg-slate-200" type="email" name="email" required autofocus>
                    </div>
                
                    <div>
                        <label for="password">Password</label>
                        <input id="password" class="bg-slate-200" type="password" name="password" required>
                    </div>
                
                    <div class="flex  justify-end">
                        <a class="justify-end text-sm text-cyan-900 underline" href="">Forgot password?</a>
                    </div>
                    <div class="flex space-x-2">
                        <p class="text-sm">Are you new?</p>
                        <a href="" class="justify-end text-sm text-cyan-900 underline">Create an account</a>
                    </div>

                    <div class="justify-center flex">
                        <button class="px-10 py-2 text-white rounded-sm bg-cyan-700 hover:bg-cyan-800 duration-300" type="submit">Login</button>
                    </div>
                </form>    
            </div>
        </div>
    </section>
        

</body>
</html>