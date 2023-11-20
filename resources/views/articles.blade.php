@extends('layouts.app')


@section('content')
    <section class="grid grid-cols-2 p-5 gap-5">
        <div class="col-span-2">
            <h3 class="text-[36px] font-bold text-center mb-5">Articles</h3>
        </div>
        @foreach ($articles as $data)
            <div class="col-span-2 flex justify-center ">
                <div class="rounded bg-white shadow-md w-[700px] p-3">
                    <div class="flex justify-between gap-5">
                        <div class="">
                            <h1 class="text-lg font-bold">{{ $data->title }}</h1>
                            <p class="w-[400px]">
                                {!! strlen($data->content) > 210 ? trim(Str::substr($data->content, 0, 210)) . '...' . " <a href='articles/$data->id' class=' text-blue-600'> Lihat selengkapnya</a>" : $data->content !!}
                            </p>
                            <a href="/articles/{{ $data->id }}/print" class="rounded bg-green-600 text-white  px-3">Print PDF</a>
                        </div>
                        <div>
                            <img src="{{ asset('storage/articles/' . $data->featured_image) }}"
                                class="rounded-t h-full object-cover" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
@endsection
