    @extends('guest.layout.app')
    @section('content')
        <!-- Home -->
        <div style="background-image: url({{ asset('assets/BG.svg') }})">
            <div class="py-8">
                <h1 class="font-monserrat font-bold text-neutral-50 text-center lg:text-7xl xs:text-4xl">
                    HMTM "SPRUDA"
                </h1>
                <div class="carousel overflow-y-hidden mx-auto w-auto py-8">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="https://universitaspertamina.ac.id/common/images/logo-decorated.png" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle">❮</a>
                            <a href="#slide2" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="https://universitaspertamina.ac.id/common/images/logo-decorated.png" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle">❮</a>
                            <a href="#slide1" class="btn btn-circle">❯</a>
                        </div>
                    </div>
                </div>
                <p class="text-center text-lg w-auto mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo,
                    magni!
                </p>
            </div>
        </div>
        <!-- Home -->
        @include('guest.activity')
        @include('guest.library')
        @include('guest.services')
        <!-- Protect IPW -->
        <div class="md:m-24 xs:m-3">
            <button class="btn bg-pudar border-none rounded-md w-full h-48 md:text-9xl xs:text-6xl">
                PROTECT
            </button>
            <button class="btn bg-pudar border-none rounded-md w-full h-48 md:text-9xl xs:text-6xl my-12">
                IPW
            </button>
        </div>
        <!-- Protect IPW -->
        @include('guest.kajian')
        @include('guest.payment')
        @include('guest.contact')
    @endsection
