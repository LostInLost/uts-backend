@extends('layouts.app')


@section('content')
    <section class="font-bold grid grid-cols-2 p-5">
        <div class="col-span-2">
            <h1 class="text-[48px] font-bold text-center">Anda Katakan, Kami Kerjakan.</h1>
        </div>
    </section>
    <div class="grid grid-cols-2">
        <div class="mt-5 flex justify-end" data-aos="fade-right" data-aos-duration="1000">
            <div class="flex flex-col">
                <p class="text-[48px] font-bold ">Jalani bisnis anda <br>
                    dengan lancar. <br>
                </p>
                <p class="w-[300px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Lastation merupakan Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ad exercitationem
                    magnam aliquid provident temporibus, cum similique velit, aut accusamus consequatur tempore sint libero
                    sunt corporis in mollitia nam doloremque.
                </p>
            </div>

        </div>
        <div class=" mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <img src="{{ asset('company1.png') }}" alt="">
        </div>
    </div>
@endsection
