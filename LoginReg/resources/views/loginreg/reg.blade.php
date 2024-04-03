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
    
    <section class="flex items-center h-screen bg-gradient-to-br from-black to-violet-950 p-20 font-poppins">
        <div class="md:flex-row rounded-xl mx-auto drop-shadow-2xl bg-slate-800 p-20">
            <h1 class="text-4xl text-white uppercase">Food <span class=" text-red-500">Place</span></h1>
            <form method="POST" class="text-white space-y-6" action="{{ route('loginreg.reg') }}">
                <h1 class="text-2xl">Register</h1>
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name"  required autofocus>
                </div>
            
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email"  required>
                </div>
            
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                </div>
            
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            
                <div class="flex justify-center">
                    <button type="submit" class="bg-gray-300 text-black px-6 py-2 uppercase font-semibold rounded-sm hover:bg-white hover:shadow-lg hover:shadow-gray-600 duration-300 ">Register</button>
                </div>
            </form>
        </div>
    </section>
        

</body>
</html>