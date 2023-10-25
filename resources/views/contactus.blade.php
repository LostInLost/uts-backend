@extends('layouts.app')


@section('content')
    <section class="grid grid-cols-2 p-5">
        <div class="col-span-2">
            <h3 class="text-[36px] font-bold text-center mb-5">Hubungi Kami</h3>
        </div>
        <div class="text-center w-[400px] mx-auto">
            <form action="">
                <div class="flex flex-col gap-5">
                    <input type="text" placeholder="Ketik Email disini..."
                        class="rounded bg-white px-3 py-1 outline outline-1 outline-blue-600 border border-0 ">
                    <textarea type="text" placeholder="Ketik Pesan disini..."
                        class="rounded bg-white px-3 py-1 outline outline-1 outline-blue-600 border border-0 "></textarea>
                    <button class="transition bg-blue-600 rounded px-3 py-1 text-white hover:bg-blue-500">Submit</button>
                </div>
            </form>
        </div>
        <div class="mx-auto">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5322233331135!2d112.61094187605727!3d-7.94382227913226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78836e89bca147%3A0x924cc416b9db017c!2sKos%20ERBE%2042!5e0!3m2!1sid!2sid!4v1698153995268!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </section>

@endsection
