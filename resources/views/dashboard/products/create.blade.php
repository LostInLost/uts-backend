@extends('layouts.dashboard.app')

@section('content')
    <section>
        <div class="text-center">
            <h1 class="text-[36px] font-bold">Add Products</h1>
        </div>
        <div class="flex flex-col">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <div class="col-span-2">
                        <h1>Image Pict</h1>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" id="drop-image"
                                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click
                                            to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG
                                    </p>
                                </div>
                            </label>
                            <input id="dropzone-file" name="photo" type="file" class="hidden" onchange="showName(event)" />
                            <div id="showFile" class="hidden">
                                <span id="nameFile" class=" mb-3  mr-3"></span>
                                <button type="button" onclick="deleteFile()"
                                    class="p-3 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </div>

                        </div>
                        @error('photo')
                            <div>
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror

                    </div>

                    <div class="col-span-2">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Type here..." required>
                        @error('title')
                            <div>
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="desc"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="desc" rows="5" name="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Type Here" required>{{ old('description') }}</textarea>
                        @error('desc')
                            <div>
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <div class="flex justify-end">
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add</button>
                            <a href="/dashboard/products"
                                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
@endsection

@section('js')
    <script type="text/javascript">
        const showName = (event) => {
            const files = event.target.files
            const dropImage = document.getElementById('drop-image')
            console.log(files[0]?.name)
            if (!files[0]?.name || files[0]?.name == '') {
                dropImage.classList.remove('hidden')
                return file.classList.add('hidden')
            }
            dropImage.classList.add('hidden')
            return file.classList.remove('hidden')
        }
        const file = document.getElementById('dropzone-file')
    </script>
@endsection
