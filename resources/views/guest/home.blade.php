    @extends('guest.layout.app')
    @section('content')
        <!-- Home -->
        <div style="background-image: url({{ asset('assets/BG.svg') }} )">
            <h1 class="text-7xl font-bold py-4 text-neutral-50 text-center">
                HMTM "SPRUDA"
            </h1>
            <div class="carousel overflow-y-hidden flex mx-32 h-96">
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
            <p class="text-center text-4xl w-auto mx-48">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo,
                magni!
            </p>
        </div>
        <!-- Home -->
        @include('guest.activity')
        @include('guest.library')
        @include('guest.services')
        <!-- Protect IPW -->
        <div class="m-24">
            <button class="btn bg-pudar border-none rounded-md w-full h-48 mb-10 text-9xl">
                PROTECT
            </button>
            <button class="btn bg-pudar border-none rounded-md w-full h-48 text-9xl my-12">
                IPW
            </button>
        </div>
        <!-- Protect IPW -->
        @include('guest.kajian')
        @include('guest.payment')
        @include('guest.contact')
    @endsection
