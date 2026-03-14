@extends('layouts.app')

@section('content')
<section id="Header" class="flex flex-col gap-[100px] bg-portto-black relative max-h-[665px] mb-[493px] pt-[130px]">
    @include('partials.navbar')

    <div class="hero container max-w-[1130px] mx-auto flex flex-col justify-center items-center relative">
        <h1 class="font-extrabold text-[50px] leading-[70px] text-white text-center z-10">{{ $service->title }}</h1>
        <p class="text-xl leading-[30px] text-white z-10">{{ $service->category }}</p>

        <div class="flex shrink-0 w-full h-[800px] rounded-[50px] overflow-hidden bg-white mt-[70px] z-10">
            @if($service->cover_image)
                <img src="{{ asset('storage/' . $service->cover_image) }}" class="w-full h-full object-cover" alt="{{ $service->title }}">
            @endif
        </div>

        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-[135px] w-[35%]" alt="background icon">
    </div>
</section>

<section id="Details" class="container max-w-[1130px] mx-auto pt-[50px]">
    <div class="flex gap-[50px] justify-between">
        <div class="flex flex-col gap-5">
            <h2 class="font-extrabold text-2xl">{{ $service->purpose_title ?? 'The First Purpose' }}</h2>
            <div class="description flex flex-col gap-4 font-medium text-lg leading-[38px] mb-10">
                {!! nl2br(e($service->description)) !!}
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
@endsection