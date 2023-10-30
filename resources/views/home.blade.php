@extends('layouts.app')


@section('content')
    <section class="font-bold grid grid-cols-2 p-5">
        {{-- <img src="{{ Vite::asset('resources/images/—Pngtree—gear parts icon cartoon_4630148.png') }}" class="absolute top-[30%] " width="70px" alt=""> --}}
        <div class="col-span-2">
            <h1 class="text-[48px] font-bold text-center" data-aos="fade-down" data-aos-duration="1000">Anda Katakan, Kami Kerjakan.</h1>
        </div>
    </section>
    <div class="grid xl:grid-cols-2 md:grid-cols-1">
        <div class="mt-5 flex xl:justify-end md:justify-center" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col">
                <p class="text-[48px] font-bold md:text-center xl:text-start">Jalani bisnis anda <br>
                    dengan lancar. <br>
                </p>
                <p class="xl:w-[400px] md:w-[500px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Kami menyediakan jasa membuat website sesuai dengan kebutuhan yang anda. Kebutuhan apapun yang anda
                    perlukan,
                    dengan kami bisa membuat kebutuhan anda terpenuhi dengan sebuah website
                </p>
            </div>
        </div>
        <div class=" mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <img src="{{ asset('build/assets/company1-f8293ae2.png') }}" class="floating-img absolute" alt="">
        </div>
        <div class="mt-[250px] xl:col-span-2 md:col-span-1 flex justify-center flex-wrap gap-5">
            <button
                class="transition rounded-full px-4 py-3 bg-blue-500 text-white font-bold text-lg hover:bg-blue-400 outline outline-1 outline-blue-600"
                data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">Lihat Detail</button>
            <button
                class="transition rounded-full px-4 py-3 bg-white text-black font-bold text-lg outline outline-1 outline-slate-100"
                data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1000">Buat Website Anda</button>
        </div>
        <div class="col-span-2 flex justify-center mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
            <p class="text-[36px] font-bold">Powered By :</p>
        </div>
        <div class="col-span-2 flex justify-center -mt-5">
            <div class="grid grid-cols-5 gap-5">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1300">
                    <img src="{{ asset('build/assets/google-50eeaddd.png') }}" width="200px" height="100px" alt="">
                </div>
                <div class="my-auto" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1400">
                    <img src="{{ asset('build/assets/ubig-logo-contact-2edbf15b.png') }}"  alt="">
                </div>
                <div class="my-auto" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1500">
                    <img src="{{ asset('build/assets/main-logo-hires-7492fe03.png') }}"  alt="">
                </div>
                <div class="my-auto" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1600">
                    <img src="{{ asset('build/assets/1200px-Logo-Tokopedia-67a56e34.png') }}" class="w-[200px]  -ml-[80px]"  alt="">
                </div>
                <div class="my-auto" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="1700">
                    <img src="{{ asset('build/assets/pngimg.com - microsoft_PNG10-4bad04d3.png') }}" class="w-[200px] -ml-[80px]"  alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
