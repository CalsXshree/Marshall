{{-- <div class="">
    <div class=" object-bottom w-full h-[500px] mb-20 overflow-hidden bg-no-repeat bg-cover bg-fixed from-teal-950 to-teal-800 shadow-lg"
        style=" relative background-image: url({{ asset('images/marshall13.jpg') }})">
        <div class="absolute">
        </div>
        <div>
            <img class="absolute top-0" src="[{{ asset('images/marshall(26).jpg') }}] " alt="">
            <img class="absolute top-0" src="[{{ asset('images/marshall(26).jpg') }}] " alt="">
        </div>
    </div>
</div> --}}
<div>
    <div class=" relative w-full h-[33rem]  bg-no-repeat bg-cover bg-fixed mt-20 pb-20 from-teal-950 to-teal-800 shadow-lg "
        style="background-image: url({{ asset('images/marshall13.jpg') }})">
        {{-- <img src="{{ asset('images/marshall(31).jpg') }}" alt="" class="w-full"> --}}
        <div class="absolute inset-0 bg-blue-100 bg-opacity-30 z-10"></div>
        <div class="grid grid-cols-3">
            <div class="w-full h-full grid place-items-center mt-16 ml-20">
                <div class=" relative text-2xl text-center s text-[#ffffff] font-serif
             z-20">
                    <div class="flex text-2xl">
                        Features on the blog
                    </div>
                    <div class="h-[2px] w-6/6 bg-black mb-5 z-20 relative "></div>
                    <div class="text-4xl font-serif text-white ">
                        Annie & Jack in Calgary, Canada
                        <h4 class="text-sm uppercase text-gray-200 font-serif mt-5"> a sophisticated multicultural
                            calgary
                            <br> <i> wedding</i>
                        </h4>
                        <center>
                            <div class="h-[2px] w-6/6 bg-black mb-28 mt-5 z-20 relative "></div>
                        </center>
                    </div>
                </div>
                {{-- <div class=" absolute text-xl text-center bottom-28 text-white"> <i> You deserve a custom
                    experience as breathtaking as your final gallery, <br> and that’s what I deliver.
                </i>
            </div> --}}
                <div class="absolute
                bottom-40 text-cente z-30">
                    <a href="/inquire"
                        class=" font-normal hover:bg-lime-100 text-white hover:text-black px-10 py-2 uppercase">View
                        the wedding
                    </a>
                </div>
            </div>
        </div>
        <div>
            <img class="z-20 right-[10%] h-[450px] absolute object-cover w-[20rems]  -bottom-[4rem] bg-green-100 p-3"
                src="{{ asset('images/marshall(18).jpg') }}" alt="">
        </div>
        <div>
            <img class="z-20 right-[35%] h-[450px] absolute object-cover w-[20rems]  -bottom-[4rem] bg-green-100 p-3"
                src="{{ asset('images/marshall(18).jpg') }}" alt="">
        </div>
    </div>
</div>
