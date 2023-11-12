@extends('layouts.app')


@section('content')
    <section class="grid grid-cols-2 p-5">
        <div class="col-span-2">
            <h3 class="text-[36px]  text-center font-bold">Produk Kami</h3>
        </div>
        <div class="col-span-2 mx-auto">
            <div class="grid grid-cols-2 gap-5">
                @foreach ($products as $data)
                    <div class="rounded bg-white shadow-md w-[400px]">
                        <div class="divide-y">
                            <div class="relative">
                                <img src="{{ asset('assets/products/'.$data->photo) }}" class="rounded-t h-[150px] object-cover w-full" alt="">
                            </div>
                            <div class="p-3">
                                <h1 class="font-bold text-[24px] ">{{ $data->title }}</h1>
                            </div>
                            <p class="p-3">
                                {{ $data->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="rounded bg-white shadow-md w-[400px]">
                    <div class="divide-y">
                        <div class="relative">
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
