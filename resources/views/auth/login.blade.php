@extends('guest.layout.app')
@section('content')
    <!-- Card Login -->
    <div class="bg-main bg-cover py-10">
        <div class="card card-compact mx-auto my-36 rounded-xl md:w-96 xs:w-60 h-80 bg-base-100 shadow-lg">
            <figure class="place-self-center w-20 p-2">
                <img src="{{ asset('assets/hmtm.png') }}" alt="HMTM" />
            </figure>
            <div class="card-body flex justify-between">
                <p>NIM</p>
                <input type="text" placeholder="NIM" class="input border-neutral-300 w-full max-w-sm" name="nim"/>
                <p>PASSWORD</p>
                <input type="password" placeholder="Password" class="input border-neutral-300 w-full max-w-sm" name="password" />
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Log In</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Login -->
@endsection
