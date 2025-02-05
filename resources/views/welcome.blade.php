<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marshall Photographs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="header">
        <div class="bg-slate-100 text-orange-950 py-6 pr-64 pl-40">
            <div class="container mx-auto flex justify-between items-center">

                <nav class="font-mono">
                    <ul class="flex space-x-32">
                        <li><a href="/home">Home</a></li>
                        <li><a href="/about">About </a></li>
                        <li><a href="/portfolio">Portfolio </a></li>
                        <li><a href="/experience">Experience </a></li>
                        <li><a href="/journal">Journal </a></li>
                        <li><a href="/contact">Contact </a></li>
                        <li><a href="/booknow"
                                class="font-extralight border border-white bg-gray-400 hover:bg-green-800 text-white px-4 py-2 rounded">Book
                                Now</a></li>
                    </ul>
                </nav>
                <ul><a href="/https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="50" height="50" viewBox="0 0 50 50">
                            <path
                                d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z">
                            </path>
                        </svg></a></ul>
                <ul>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="65" height="65"
                            viewBox="0 0 32 32">
                            <path
                                d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
                            </path>
                        </svg>
                    </a>
            </div>
        </div>


        <div id="footer">
            <div class="bg-slate-300 text-orange-950 py-1">
                <div class="container mx-auto flex justify-between items-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('images/calsxsh.png') }}" alt="" class="h-20 w-20">
                        <span class=" font-mono">©2025 Marshall-Photographs</span>
                    </a>
                    <ul class="flex space-x-11 text-orange-950 font-mono">All right reserve to Marshall-Photographs</ul>
                    <nav>
                        <ul class="flex space-x-11 text-orange-950 font-mono">
                            {{-- <li>All right reserve to Marshall-Photographs</li> --}}
                            <li class="">Designed by calsxshree</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</body>

</html>
