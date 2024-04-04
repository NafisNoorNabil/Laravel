<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
<div class="flex ">
    <nav class=" hidden md:block flex-row bg-[rgb(5,11,5)]  text-white font-nunito p-10  pt-12 space-y-10 ">
        <h1 class="text-xl md:text-2xl font-light text-center uppercase">Food <span class="text-red-800">Place</span></h1>
        <ul class="flex flex-col tracking-wide text-lg space-y-8">
            <div class="flex items-center ">
                <img src="board.png" class="w-5" alt="">
                <li><a class="hover:px-4 duration-200  hover:text-[#45B88B] p-2" href="#">Dashboard</a></li>
            </div>
            <div class="flex items-center">
                <img src="analytics.png" class="w-5" alt="">
                <li><a class="hover:px-4 duration-200 hover:text-[#45B88B] p-2" href="#">Analytics</a></li>
            </div>
            <div class="flex items-center">
                <img src="settings.png" class="w-5" alt="">
                <li><a class="hover:px-4 duration-200 hover:text-[#45B88B] p-2" href="#">Settings</a></li>
            </div>
            <div class="flex items-center">
                <img src="help.png"  class="w-5" alt="">
                <li><a class="hover:px-4 duration-200 hover:text-[#45B88B] p-2" href="#">Help</a></li>
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

    <div class="flex flex-col p-12 font-nunito bg-[#0D1515] text-white w-full space-y-4 ">
        <div class="flex md:flex-row flex-col items-center justify-between space-y-10 md:space-y-0">
            <h1 class="text-3xl font-semibold uppercase ">Dashboard</h1>
            <div class="flex items-center">
                <img src="search.png" alt="" class="relative left-7 w-5">
                <input type="" placeholder="Search..." class=" focus:bg-[#203030]  pr-32 pl-10 px-8 py-2 focus:outline-none bg-[#141E1E] ">
            </div>
        </div>
        <div class="flex flex-col md:flex-row space-x-0 md:space-x-10 md:space-y-0 space-y-10 items-center">
            <div class="flex flex-col text-black font-bold  rounded-md w-1/2 ">
                <div class="flex flex-col md:flex-row bg-[#152020] rounded-md rounded-b-none">
                    <div class="flex-1 space-y-4 justify-center  px-10 py-20 hover:bg-gradient-to-br from-lime-300 to-lime-500   hover:text-black border-[1px] rounded-md rounded-b-none rounded-r-none border-black text-white duration-200 border-1">
                        <p class="text-2xl ">Visitors</p>
                        <p>30,000</p>
                    </div>
                    <div class=" space-y-4 flex-1 px-10 py-20 hover:bg-gradient-to-bl from-lime-300 to-lime-500 hover:text-black border-[1px] rounded-md rounded-l-none rounded-b-none border-black text-white duration-200 border-1">
                        <p class="text-2xl ">Restaurants</p>
                        <p>1200</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row bg-[#152020] rounded-md rounded-t-none">
                    <div class="flex-1 space-y-4  px-10 py-20 hover:bg-gradient-to-tr from-lime-300 to-lime-500 hover:text-black border-[1px] rounded-md border-black rounded-t-none rounded-r-none text-white duration-200 border-1">
                        <p class="text-2xl ">Contacts</p>
                        <p>10,000</p>
                    </div>
                    <div class="flex-1 space-y-4  px-10 py-20 hover:bg-gradient-to-tl from-lime-300 to-lime-500 hover:text-black border-[1px] rounded-md border-black rounded-l-none rounded-t-none text-white duration-200 border-1">
                        <p class="text-2xl ">Revenue</p>
                        <p>$40,000</p>
                    </div>
                </div>
            </div>
            <img src="graph.png" class="rounded-md h-5/6">
        </div>

        <h1 class="uppercase text-3xl font-semibold ">Orders</h1>
        <div class="overflow-x-auto pt-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-sm text-gray-700 uppercase bg-white ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Customer Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order Time
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Items Ordered
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
        
                    </tr>
                </thead>
                <tbody>
                    <tr class=" border-b border-gray-800 text-white hover:bg-[#152020] duration-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">12:30 PM</td>
                        <td class="px-6 py-4">Pepperoni Pizza, Coke</td>
                        <td class="px-6 py-4">$15.50</td>
                        <td class="px-6 py-4 text-green-300">Completed</td>
                    </tr>
                    <tr class=" border-b border-gray-800 text-white hover:bg-[#152020] duration-100"">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Alice Johnson</td>
                        <td class="px-6 py-4">1:45 PM</td>
                        <td class="px-6 py-4">Vegetarian Pizza, Salad, Lemonade</td>
                        <td class="px-6 py-4">$22.00</td>
                        <td class="px-6 py-4 text-green-300">Completed</td>
                    </tr>
                    <tr class=" border-b border-gray-800 text-white hover:bg-[#152020] duration-100"">
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">Michael Smith</td>
                        <td class="px-6 py-4">2:00 PM</td>
                        <td class="px-6 py-4">Margherita Pizza, Garlic Bread, Wine</td>
                        <td class="px-6 py-4">$28.25</td>
                        <td class="px-6 py-4 text-green-300">Completed</td>
                    </tr>
                    <tr class=" border-b border-gray-800 text-white hover:bg-[#152020] duration-100"">
                        <td class="px-6 py-4">4</td>
                        <td class="px-6 py-4">Emily Brown</td>
                        <td class="px-6 py-4">3:30 PM</td>
                        <td class="px-6 py-4">Hawaiian Pizza, Fries, Iced Tea</td>
                        <td class="px-6 py-4">$18.75</td>
                        <td class="px-6 py-4 text-yellow-300">Pending</td>
                    </tr>
                    <tr class="text-white hover:bg-[#152020] duration-100"">
                        <td class="px-6 py-4">5</td>
                        <td class="px-6 py-4">David Wilson</td>
                        <td class="px-6 py-4">5:00 PM</td>
                        <td class="px-6 py-4">Supreme Pizza, Caesar Salad, Beer</td>
                        <td class="px-6 py-4">$30.50</td>
                        <td class="px-6 py-4 text-red-300">Cancelled</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

