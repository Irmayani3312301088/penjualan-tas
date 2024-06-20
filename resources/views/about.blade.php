@extends('layout.home')

@section('title', 'Aplikasi Web Tas')
@section('content')

<div class="about-section bg-pink-100 py-12 mt-20">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center lg:space-x-12 px-4 lg:px-0">
        <div class="lg:w-1/3 w-full mb-8 lg:mb-0">
            <img src="{{ url('/images/image1.png') }}" class="h-auto w-full rounded-lg shadow-lg" alt="Logo">
        </div>
        <div class="lg:w-2/3">
            <p class="text-gray-800 text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere lorem vitae est vestibulum, ut bibendum ligula tincidunt. Mauris eget ligula ac ipsum lacinia bibendum non at lorem. Nulla varius mi ut felis egestas, eu eleifend mauris pellentesque. Duis porta volutpat commodo. Vivamus sit amet dolor vel dui tempus volutpat ac et sapien.
            </p>
            <p class="text-gray-800 text-lg leading-relaxed mt-4">
                Proin congue magna sed consequat placerat. Duis at varius nunc. Nullam nec interdum magna, quis dignissim ex. Aliquam scelerisque euismod aliquam. Nulla hendrerit turpis nec vestibulum commodo. Suspendisse consectetur, velit auctor vehicula condimentum, lectus arcu aliquam arcu, vel feugiat lectus purus in ex.
            </p>
            <p class="text-gray-800 text-lg leading-relaxed mt-4">
                Fusce eget arcu et risus bibendum posuere. Phasellus rhoncus turpis justo, id interdum magna luctus non. Sed condimentum dolor vitae justo varius lobortis. Duis nec arcu rutrum, volutpat velit vel, scelerisque risus. Nulla facilisi. Donec ut dapibus quam. Donec sit amet lorem id eros maximus consequat.
            </p>
        </div>
    </div>
</div>

  @endsection
