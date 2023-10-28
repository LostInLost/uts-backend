@extends('layouts.app')


@section('content')
    <section class="grid grid-cols-2 p-5">
        <div class="col-span-2">
            <h3 class="text-[36px]  text-center font-bold">Produk Kami</h3>
        </div>
        <div class="col-span-2 mx-auto">
            <div class="grid grid-cols-2 gap-5">
                <div class="rounded bg-white shadow-md w-[400px]">
                    <div class="divide-y">
                        <div class="relative">
                            <img src="{{ Vite::asset('resources/images/leline.png') }}" class="rounded-t" alt="">
                        </div>
                        <div class="p-3">
                            <h1 class="font-bold text-[24px] ">Lelang Online</h1>
                        </div>
                        <p class="p-3">
                            Aplikasi yang memudahkan pelelang dan penawar melakukan lelang secara Online.
                        </p>
                    </div>
                </div>
                <div class="rounded bg-white shadow-md w-[400px]">
                    <div class="divide-y">
                        <div class="relative">
                            {{-- <img src="{{ Vite::asset('resources/images/leline.png') }}" class="rounded-t" alt=""> --}}
                        </div>
                        <div class="p-3">
                            <h1 class="font-bold text-[24px] text-center">Coming Soon</h1>
                        </div>
                        <p class="p-3">
                            Ingin membuat Website baru? silahkan pilih <i>Order Now</i>
                            <br>
                        </p>
                    </div>
                    <div class="flex justify-center ">
                        <button
                            class="transition rounded px-3 py-1 outline outline-1 outline-green-400 hover:shadow-lg text-green-600">Order
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
