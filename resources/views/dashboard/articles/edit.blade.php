@extends('layouts.dashboard.app')

@section('content')
    <section>
        <div class="text-center">
            <h1 class="text-[36px] font-bold">Add Articles</h1>
        </div>
        <div class="flex flex-col">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-5">
                    <div class="col-span-2">
                        <h1>Image Pict</h1>


                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="file_input_help" id="file_input" type="file" name="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG, Isi jika ingin mengubah gambar</p>

                        @error('file')
                            <div>
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror

                    </div>

                    <div class="col-span-2">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') ?? $article->title }}"
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
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                        <textarea id="desc" rows="5" name="content"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Type Here" required>{{ old('content') ?? $article->content }}</textarea>
                        @error('content')
                            <div>
                                <span class="text-red-600">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <div class="flex justify-end">
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                            <a href="/dashboard/articles"
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
