@extends('layouts.app')

@section('content')
    <section >
        <div class="text-center">
            <h1 class="text-[36px] font-bold">Detail Article</h1>
        </div>
        <div class="flex flex-col shadow-lg rounded bg-white">
            <div class="grid grid-cols-2 divide-y">
                <div class="col-span-2">
                    <div class="flex items-center justify-center w-full">
                        <img class="rounded object-cover w-full h-[300px]"
                            src="{{ asset('storage/articles/' . $article->featured_image) }}" alt="">
                    </div>

                </div>

                <div class="col-span-2">
                    <h1 class=" font-bold text-[24px] p-3">{{ $article->title }}</h1>
                </div>

                <div class="col-span-2 p-3">
                    <p>
                        {{ $article->content  }}
                    </p>
                </div>

                <div class="col-span-2">
                    <div class="flex justify-end my-3">
                        <a href="/articles"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
