<div class="text-6xl text-center font-serif uppercase">
    Weddings
    <div class="swiper mySwiper h-[30rem] w-[20rem]">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <img src="{{ asset('images/marshall(34).jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall(32).jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall31.jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall30.jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall(33).jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall(34).jpg') }}" />
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/marshall31.jpg') }}" />
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 10,
                modifier: 3,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

    @php
        $photo = [
            ['item' => 'images/marshall(15).jpg'],
            ['item' => 'images/marshall(16).jpg'],
            ['item' => 'images/marshall(11).jpg'],
            ['item' => 'images/marshall(18).jpg'],
            ['item' => 'images/marshall(19).jpg'],
            ['item' => 'images/marshall(20).jpg'],
        ];
    @endphp
    <div>
        <h3 class="uppercase text-6xl font-extralight font-serif text-center">Weddings</h3>
        <div class="swiper mySwipers">
            <div class="swiper-wrapper">
                @foreach ($photo as $item)
                    <div class="swiper-slide "><img src="{{ asset($item['item']) }}" alt="">
                    </div>
                @endforeach
                {{-- <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div> --}}
            </div>
            <div class="swiper-class"></div>
        </div>
    </div>

    <script>
        var swiper = new Swiper(".mySwipers", {
            slidesPerView: 3.5,
            centeredSlides: true,
            spaceBetween: 70,
            pagination: {
                el: ".swiper-class",
                clickable: true,
            },
        });
    </script>
