@extends('layouts.app')

@section('content')
<section class="bg-portto-black pb-[120px] pt-[130px]">
    @include('partials.navbar')
    <div class="container max-w-[1130px] mx-auto px-4 text-white">
        <h1 class="font-extrabold text-[42px] md:text-[60px] leading-[1.2]">All Services</h1>
        <p class="text-lg text-[#BABABC] mt-4">Explore all services that I provide for your business growth.</p>
    </div>
</section>

<section class="container max-w-[1130px] mx-auto px-4 py-[100px]">
    @if($services->count())
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px]">
            @foreach($services as $service)
                <a href="{{ route('services.show', $service->slug) }}"
                   class="rounded-[30px] p-[30px] md:p-[40px] flex flex-col gap-6 transition-all duration-300 hover:-translate-y-1"
                   style="background-color: {{ $service->background_color ?? '#F4F5F8' }};">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full"
                         style="background-color: {{ $service->icon_background_color ?? '#4920E5' }};">
                        @if($service->icon)
                            <img src="{{ asset('storage/' . $service->icon) }}" class="w-10 h-10 object-contain" alt="{{ $service->title }}">
                        @endif
                    </div>

                    <div class="flex flex-col gap-4">
                        <h2 class="font-extrabold text-[28px] leading-[40px]">{{ $service->title }}</h2>
                        <p class="text-lg leading-[32px] text-[#878C9C]">{{ $service->short_description ?? $service->description }}</p>
                    </div>

                    <div class="w-full h-[280px]">
                        @if($service->card_image)
                            <img src="{{ asset('storage/' . $service->card_image) }}" class="w-full h-full object-contain" alt="{{ $service->title }}">
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</section>
@include('partials.footer')
@endsection