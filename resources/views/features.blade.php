@extends('layouts.app')


@section('content')
    <section class="grid grid-cols-2 p-5">
        <div class=" w-[500px] flex justify-center flex-col mx-auto" data-aos-delay="300" data-aos="fade-up-right" data-aos-duration="1000">
            <h1 class="text-[36px]">Dapatkan Fitur-fitur ini!</h1>
            <p class="font-thin text-[18px]">
                Website kami dirancang untuk mempermudah dan mempercepat kinerja
                Organisasi anda sehingga anda tidak perlu pusing dengan menggunakan sistem dari kami.
            </p>
        </div>
        <div data-aos="fade-up-left" data-aos-duration="1000">
            <img src="{{ asset('features-icon.png') }}" alt="">
        </div>
        <div class="col-span-2 mt-[50px] mx-auto">
            <div class="grid grid-cols-3 gap-8 mt-[20px]  ">
                <div class="bg-white rounded p-3 relative w-[300px] "
                data-aos="zoom-out-right" data-aos-delay="700" data-aos-duration="1000"
                >
                    <img src="{{ asset('database.png') }}" class="outline outline-1 rounded-full bg-white  absolute  -top-8 -left-4"
                        width="60px" alt="">
                    <div class="divide-y">
                        <h1 class="text-center font-medium my-2">Manajemen Database Cepat</h1>
                        <p class="font-thin ">
                            Manajemen database dengan menggunakan <i>MySQL</i> memudahkan dalam pengembangan dan
                            peningkatan performa.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded p-3 relative w-[300px] "
                data-aos="zoom-out-up" data-aos-delay="800" data-aos-duration="1000"
                >
                    <img src="{{ asset('monitor.png') }}" class="outline outline-1 rounded-full bg-white  absolute  -top-8 -left-4"
                        width="60px" alt="">
                    <div class="divide-y">
                        <h1 class="text-center font-medium my-2">Tampilan Menarik dan Simpel</h1>
                        <p class="font-thin ">
                            Dengan User Experience dari kami, membuat tampilan lebih mudah dipahami
                            oleh para Pengguna.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded p-3 relative w-[300px] "
                data-aos="zoom-out-left" data-aos-delay="900" data-aos-duration="1000">
                    <img src="{{ asset('service.png') }}" class="rounded-full bg-white outline outline-1  absolute  -top-8 -left-4"
                        width="60px" alt="">
                    <div class="divide-y">
                        <h1 class="text-center font-medium my-2">Maintenance Bertahap</h1>
                        <p class="font-thin ">
                            Maintenance setiap minggu, pengecekan <i>Bug</i>, dan memelihara sistem.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
