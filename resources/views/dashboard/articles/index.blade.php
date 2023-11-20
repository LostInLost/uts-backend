@extends('layouts.dashboard.app')

@section('content')
    <div class="flex flex-col">
        <div>
            <a href="/dashboard/articles/create" type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Tambah
                Articles</a>
        </div>
        <div class="grid grid-cols-4 gap-5">
            @foreach ($articles as $data)
                <div
                    class="max-w-[400px]  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg w-full h-[150px] object-cover" src="{{ asset('/storage/articles/'. $data->featured_image) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ strlen($data->title) > 20 ? (trim(Str::substr($data->title, 0, 20)) . '...') : $data->title }}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ strlen($data->content) > 30 ? (Str::substr($data->content, 0, 30) . '...') : $data->content }}
                        </p>
                        <div class="flex gap-2">
                            <a href="/dashboard/articles/{{ $data->id }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Detail
                            </a>
                            <a href="/dashboard/articles/{{ $data->id }}/edit"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Edit
                            </a>
                            <form action="/dashboard/articles/{{ $data->id }}/delete" method="POST">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach



        </div>
    </div>
@endsection
