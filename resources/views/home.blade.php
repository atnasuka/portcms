@extends('layouts.app')

@section('content')
<section id="Header" class="flex flex-col gap-[60px] md:gap-[100px] bg-portto-black relative">
    {{-- Navbar --}}
    <nav id="mainNavbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <div id="navbarInner" class="container max-w-[1130px] mx-auto flex justify-between items-center px-4 md:px-6 lg:px-0 py-4 md:py-6 transition-all duration-300">
            <a href="{{ route('home') }}" class="flex shrink-0 h-fit w-fit z-50">
                @if(!empty($siteSetting?->logo))
                    <img src="{{ asset('storage/' . $siteSetting->logo) }}" alt="logo" class="h-10 md:h-auto">
                @else
                    <span class="text-white font-bold text-xl md:text-2xl">
                        {{ $siteSetting->site_name ?? 'Logo' }}
                    </span>
                @endif
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex gap-[40px] items-center">
                <ul class="flex gap-[30px] xl:gap-[50px] items-center text-white">
                    <li><a href="{{ route('home') }}" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">Home</a></li>
                    <li><a href="#Services" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">Services</a></li>
                    <li><a href="#Testimonials" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">Testimonials</a></li>
                    <li><a href="{{ route('blog.index') }}" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">Blog</a></li>
                    <li><a href="#FAQ" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">About</a></li>
                </ul>

                <a href="{{ route('booking.create') }}"
                    class="bg-portto-light-gold font-bold text-base xl:text-lg px-6 py-3 rounded-full transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">
                    Hire Me
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobileMenuButton"
                class="lg:hidden flex flex-col gap-1.5 z-50"
                type="button"
                aria-label="Toggle menu">
                <span class="w-7 h-0.5 bg-white rounded transition-all duration-300"></span>
                <span class="w-7 h-0.5 bg-white rounded transition-all duration-300"></span>
                <span class="w-7 h-0.5 bg-white rounded transition-all duration-300"></span>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="lg:hidden hidden bg-portto-black/95 backdrop-blur-md border-t border-white/10">
            <div class="container max-w-[1130px] mx-auto px-4 py-5 flex flex-col gap-4 text-white">
                <a href="{{ route('home') }}" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">Home</a>
                <a href="#Services" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">Services</a>
                <a href="#Testimonials" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                <a href="{{ route('blog.index') }}" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">Blog</a>
                <a href="#FAQ" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">About</a>

                <a href="{{ route('booking.create') }}"
                    class="bg-portto-light-gold text-portto-black text-center font-bold text-base px-6 py-3 rounded-full transition-all duration-300">
                    Hire Me
                </a>
            </div>
        </div>
    </nav>

    {{-- Hero --}}
    <div class="hero container max-w-[1130px] mx-auto flex flex-col-reverse lg:flex-row justify-between items-center relative px-4 md:px-6 lg:px-0 pt-[120px] md:pt-[140px]">
        <div class="flex flex-col gap-6 md:gap-[30px] lg:gap-[50px] h-fit w-full lg:w-fit text-white z-10 text-center lg:text-left">
            <p class="font-semibold text-lg md:text-2xl">{{ $siteSetting->hero_name ?? "I'm Shayna 👋" }}</p>

            <h5 class="font-extrabold text-[32px] leading-[42px] md:text-[48px] md:leading-[58px] lg:text-[60px] lg:leading-[70px]">
                {{ $siteSetting->hero_title ?? 'Professional Designer & Dev' }}
            </h5>

            <a href="{{ $siteSetting->hero_button_link ?? route('booking.create') }}"
               class="font-bold text-lg md:text-[22px] lg:text-[26px] leading-normal rounded-[20px] px-6 py-4 md:px-[30px] md:py-[20px] bg-portto-purple w-fit mx-auto lg:mx-0 transition-all duration-300 hover:shadow-[0_10px_20px_0_#4920E5]">
                {{ $siteSetting->hero_button_text ?? 'Explore Now' }}
            </a>
        </div>

        <div class="flex w-full max-w-[280px] md:max-w-[380px] lg:max-w-[471px] max-h-[567px] z-10 mb-8 lg:mb-0">
            @if(!empty($siteSetting?->hero_image))
                <img src="{{ asset('storage/' . $siteSetting->hero_image) }}" class="w-full h-full object-contain" alt="hero image">
            @endif
        </div>

        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-[500px] md:w-auto" alt="background icon">
    </div>

    {{-- Company Logos --}}
    <div class="company-logos w-full overflow-hidden pb-[230px] md:pb-[190px]">
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[40px] md:gap-[70px] pl-[40px] md:pl-[70px] items-center flex-nowrap">
                @for ($i = 0; $i < 8; $i++)
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum' . (($i % 4) + 1) . '.png') }}" class="w-full h-full object-contain" alt="logo">
                    </div>
                @endfor
            </div>

            <div class="logo-container animate-[slide_25s_linear_infinite] group-hover/slider:pause-animate flex gap-[40px] md:gap-[70px] pl-[40px] md:pl-[70px] items-center flex-nowrap">
                @for ($i = 0; $i < 8; $i++)
                    <div class="flex w-fit h-[30px] md:h-[40px] shrink-0">
                        <img src="{{ asset('images/logos/logoipsum' . (($i % 4) + 1) . '.png') }}" class="w-full h-full object-contain" alt="logo">
                    </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Stats --}}
    @if($stats->count())
        <div class="stats container max-w-[1130px] mx-auto bg-gradient-to-r from-[#FFEDD3] to-[#FFCD83] flex flex-row justify-between items-center px-3 sm:px-5 md:px-10 lg:px-[100px] py-4 sm:py-5 md:py-8 rounded-[20px] md:rounded-[30px] w-[calc(100%-24px)] md:w-full min-h-[100px] sm:min-h-[130px] md:min-h-[180px] absolute -translate-x-1/2 translate-y-1/2 bottom-0 left-1/2 z-20">
            @foreach($stats as $stat)
                <div class="text-center flex-1 min-w-0">
                    <p class="font-extrabold text-[20px] leading-[28px] sm:text-[26px] sm:leading-[34px] md:text-[34px] md:leading-[44px] lg:text-[40px] lg:leading-[60px] truncate">
                        {{ $stat->value }}
                    </p>
                    <p class="font-semibold text-[11px] sm:text-[13px] md:text-base lg:text-lg leading-tight break-words">
                        {{ $stat->label }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif
</section>

<section id="Services" class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 pt-[220px] md:pt-[190px] pb-[100px]">
    <div class="flex flex-col gap-[50px]">
        <div class="flex flex-col gap-5 lg:flex-row lg:justify-between lg:items-center">
            <h2 class="font-extrabold text-[32px] leading-[42px] md:text-[42px] md:leading-[56px] lg:text-[50px] lg:leading-[70px]">
                Actually, I Do Design <br>& Code for Living
            </h2>

            <a href="{{ route('booking.create') }}" class="font-bold text-lg bg-portto-black rounded-full w-fit h-fit px-[30px] py-[14px] text-white transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">
                All Services
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
            <div class="p-[30px] md:p-[50px] pb-0 rounded-[30px] flex flex-col gap-[30px] md:gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-purple">
                    <img src="{{ asset('images/icons/crown.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[24px] leading-[36px] md:text-[32px] md:leading-[48px]">High-Quality Mobile App UI/UX Design</p>
                    <p class="text-base md:text-lg leading-[30px] md:leading-[34px]">Delivering great experience to users so that they are comfortable while using your product.</p>
                </div>
                <div class="w-full h-[220px] md:h-[350px]">
                    <img src="{{ asset('images/services1.png') }}" class="w-full h-full object-contain" alt="image">
                </div>
            </div>

            <div class="p-[30px] md:p-[50px] pb-0 rounded-[30px] flex flex-col gap-[30px] md:gap-[50px] bg-[#F4F5F8]">
                <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-green">
                    <img src="{{ asset('images/icons/code.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                </div>
                <div class="flex flex-col gap-5">
                    <p class="font-extrabold text-[24px] leading-[36px] md:text-[32px] md:leading-[48px]">AI Business Dashboard Finance Company</p>
                    <p class="text-base md:text-lg leading-[30px] md:leading-[34px]">Delivering great experience to users so that they are comfortable while using product.</p>
                </div>
                <div class="w-full h-[220px] md:h-[350px]">
                    <img src="{{ asset('images/services2.png') }}" class="w-full h-full object-contain" alt="image">
                </div>
            </div>

            <div class="col-span-1 lg:col-span-2 p-[30px] md:p-[50px] pb-0 rounded-[30px] flex flex-col lg:flex-row gap-[30px] lg:gap-[50px] bg-[#F4F5F8]">
                <div class="flex flex-col gap-[30px] md:gap-[50px]">
                    <div class="flex items-center justify-center shrink-0 w-20 h-20 rounded-full bg-portto-red">
                        <img src="{{ asset('images/icons/3dcube.svg') }}" class="w-10 h-10 object-contain" alt="icon">
                    </div>
                    <div class="flex flex-col gap-5">
                        <p class="font-extrabold text-[24px] leading-[36px] md:text-[32px] md:leading-[48px]">Robust Plugins Connected Machine Learning</p>
                        <p class="text-base md:text-lg leading-[30px] md:leading-[34px]">Delivering great experience to users so that they are comfortable while using your product to grow.</p>
                    </div>
                </div>
                <div class="w-full lg:w-[450px] h-[220px] md:h-[350px] flex shrink-0">
                    <img src="{{ asset('images/services3.png') }}" class="w-full h-full object-contain" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Projects" class="w-full flex flex-col py-[100px] bg-[url('/images/background/background1.png')] bg-cover bg-center bg-no-repeat overflow-hidden">
    <div class="flex flex-col gap-[10px] mb-[50px] px-4 md:px-6 lg:px-0">
        <h2 class="font-extrabold text-[32px] leading-[42px] md:text-[42px] md:leading-[56px] lg:text-[50px] lg:leading-[70px] text-center text-white">Great Projects</h2>
        <p class="text-base md:text-lg text-center text-white">Working with awesome team from around the world</p>
    </div>

    @php
        $projectSlides = $projects->take(6);
    @endphp

    @if($projectSlides->count())
        <div class="projects w-full flex flex-col mb-[30px] overflow-hidden">
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[20px] md:gap-[30px] pl-[20px] md:pl-[30px] items-center flex-nowrap">
                    @foreach($projectSlides as $project)
                        <div class="group w-[320px] md:w-[500px] lg:w-[650px] h-[240px] md:h-[340px] lg:h-[450px] flex shrink-0 rounded-[30px] border border-white p-3 md:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[calc(100%-24px)] md:w-[460px] lg:w-[608px] h-[calc(100%-24px)] md:h-[300px] lg:h-[408px] rounded-[30px] overflow-hidden absolute">
                                @if($project->cover)
                                    <img src="{{ asset('storage/' . $project->cover) }}" class="w-full h-full object-cover" alt="{{ $project->name }}">
                                @endif
                            </div>

                            <div class="flex flex-col w-full items-center justify-center gap-[25px] md:gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 group-hover:opacity-100 transition-all duration-300 z-10">
                                <div class="text-center z-10 px-4">
                                    <p class="font-extrabold text-[22px] leading-[32px] md:text-[28px] md:leading-[40px] lg:text-[32px] lg:leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-sm md:text-lg text-[#BABABC]">
                                        {{ $project->category }}
                                    </p>
                                </div>

                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="z-10 font-bold text-sm md:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full px-5 py-3 md:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">
                                    View Details
                                </a>

                                <img src="{{ asset('images/Ellipse.svg') }}"
                                     class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                     alt="background icon">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="project-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[20px] md:gap-[30px] pl-[20px] md:pl-[30px] items-center flex-nowrap">
                    @foreach($projectSlides as $project)
                        <div class="group w-[320px] md:w-[500px] lg:w-[650px] h-[240px] md:h-[340px] lg:h-[450px] flex shrink-0 rounded-[30px] border border-white p-3 md:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[calc(100%-24px)] md:w-[460px] lg:w-[608px] h-[calc(100%-24px)] md:h-[300px] lg:h-[408px] rounded-[30px] overflow-hidden absolute">
                                @if($project->cover)
                                    <img src="{{ asset('storage/' . $project->cover) }}" class="w-full h-full object-cover" alt="{{ $project->name }}">
                                @endif
                            </div>

                            <div class="flex flex-col w-full items-center justify-center gap-[25px] md:gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 group-hover:opacity-100 transition-all duration-300 z-10">
                                <div class="text-center z-10 px-4">
                                    <p class="font-extrabold text-[22px] leading-[32px] md:text-[28px] md:leading-[40px] lg:text-[32px] lg:leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-sm md:text-lg text-[#BABABC]">
                                        {{ $project->category }}
                                    </p>
                                </div>

                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="z-10 font-bold text-sm md:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full px-5 py-3 md:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">
                                    View Details
                                </a>

                                <img src="{{ asset('images/Ellipse.svg') }}"
                                     class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                     alt="background icon">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="projects w-full flex flex-col overflow-hidden">
            <div class="group/slider slider flex flex-nowrap w-max items-center">
                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[20px] md:gap-[30px] pl-[20px] md:pl-[30px] items-center flex-nowrap">
                    @foreach($projectSlides as $project)
                        <div class="group w-[320px] md:w-[500px] lg:w-[650px] h-[240px] md:h-[340px] lg:h-[450px] flex shrink-0 rounded-[30px] border border-white p-3 md:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[calc(100%-24px)] md:w-[460px] lg:w-[608px] h-[calc(100%-24px)] md:h-[300px] lg:h-[408px] rounded-[30px] overflow-hidden absolute">
                                @if($project->cover)
                                    <img src="{{ asset('storage/' . $project->cover) }}" class="w-full h-full object-cover" alt="{{ $project->name }}">
                                @endif
                            </div>

                            <div class="flex flex-col w-full items-center justify-center gap-[25px] md:gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 group-hover:opacity-100 transition-all duration-300 z-10">
                                <div class="text-center z-10 px-4">
                                    <p class="font-extrabold text-[22px] leading-[32px] md:text-[28px] md:leading-[40px] lg:text-[32px] lg:leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-sm md:text-lg text-[#BABABC]">
                                        {{ $project->category }}
                                    </p>
                                </div>

                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="z-10 font-bold text-sm md:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full px-5 py-3 md:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">
                                    View Details
                                </a>

                                <img src="{{ asset('images/Ellipse.svg') }}"
                                     class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                     alt="background icon">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="project-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-[20px] md:gap-[30px] pl-[20px] md:pl-[30px] items-center flex-nowrap">
                    @foreach($projectSlides as $project)
                        <div class="group w-[320px] md:w-[500px] lg:w-[650px] h-[240px] md:h-[340px] lg:h-[450px] flex shrink-0 rounded-[30px] border border-white p-3 md:p-5 bg-[#FFFFFF33] backdrop-blur relative">
                            <div class="w-[calc(100%-24px)] md:w-[460px] lg:w-[608px] h-[calc(100%-24px)] md:h-[300px] lg:h-[408px] rounded-[30px] overflow-hidden absolute">
                                @if($project->cover)
                                    <img src="{{ asset('storage/' . $project->cover) }}" class="w-full h-full object-cover" alt="{{ $project->name }}">
                                @endif
                            </div>

                            <div class="flex flex-col w-full items-center justify-center gap-[25px] md:gap-[50px] bg-portto-black rounded-[30px] relative opacity-0 group-hover:opacity-100 transition-all duration-300 z-10">
                                <div class="text-center z-10 px-4">
                                    <p class="font-extrabold text-[22px] leading-[32px] md:text-[28px] md:leading-[40px] lg:text-[32px] lg:leading-[48px] mb-[10px] text-white">
                                        {{ $project->name }}
                                    </p>
                                    <p class="text-sm md:text-lg text-[#BABABC]">
                                        {{ $project->category }}
                                    </p>
                                </div>

                                <a href="{{ route('projects.show', $project->slug) }}"
                                   class="z-10 font-bold text-sm md:text-lg text-center w-fit h-fit bg-portto-light-gold rounded-full px-5 py-3 md:p-[14px_30px] transition-all duration-300 hover:shadow-[0_10px_20px_0_#FFE7C280]">
                                    View Details
                                </a>

                                <img src="{{ asset('images/Ellipse.svg') }}"
                                     class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-1/2"
                                     alt="background icon">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 text-center text-white">
            <p class="text-lg">No projects available yet.</p>
        </div>
    @endif
</section>

<section id="Workflow" class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 pt-[100px] pb-[120px] md:pb-[200px] relative">
    <div class="flex flex-col gap-[50px] justify-center">
        <h2 class="font-extrabold text-[32px] leading-[42px] md:text-[42px] md:leading-[56px] lg:text-[50px] lg:leading-[70px] text-center">
            My Workflow Suitable <br>For Any Project
        </h2>

        <div class="flex flex-col lg:flex-row justify-between items-center gap-10 lg:gap-0">
            <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/messages-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Research & Validate</p>
                    <p class="text-lg leading-[34px]">Ensuring all requirements were matching with market conditions</p>
                </div>
            </div>

            <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/programming-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Building with Teams</p>
                    <p class="text-lg leading-[34px]">Working with agile framework to product a better results</p>
                </div>
            </div>

            <div class="w-full lg:w-[350px] flex flex-col shrink-0 gap-[30px] items-center">
                <div class="flex-none">
                    <img src="{{ asset('images/icons/like-notif.svg') }}" alt="icon">
                </div>
                <div class="flex flex-col gap-[10px] text-center">
                    <p class="font-extrabold text-[22px] leading-[33px]">Deliver to Clients</p>
                    <p class="text-lg leading-[34px]">We bring an instant results to the clients so that they are happys</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Testimonials" class="bg-[#F4F5F8]">
    <div class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 pt-[140px] md:pt-[180px] pb-[100px]">
        <h2 class="font-extrabold text-[32px] leading-[42px] md:text-[42px] md:leading-[56px] lg:text-[50px] lg:leading-[70px] text-center">
            I Have Delivered Success <br>For All My Clients
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px] mt-[50px]">
            @foreach($testimonials->take(4) as $testimonial)
                <div class="card-testi bg-white rounded-[30px] flex flex-col p-5 gap-5">
                    <div class="h-[40px] flex shrink-0">
                        @if($testimonial->company_logo)
                            <img src="{{ asset('storage/' . $testimonial->company_logo) }}" alt="logo">
                        @endif
                    </div>

                    <p class="font-semibold text-[18px] leading-[32px] md:text-[22px] md:leading-[40px]">
                        “{{ $testimonial->content }}”
                    </p>

                    <div class="flex h-8">
                        @for($i = 1; $i <= $testimonial->rating; $i++)
                            <img src="{{ asset('images/icons/Star.svg') }}" alt="star">
                        @endfor
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-[70px] h-[70px] shrink-0">
                            @if($testimonial->client_photo)
                                <img src="{{ asset('storage/' . $testimonial->client_photo) }}" alt="photo" class="w-full h-full object-cover rounded-full">
                            @endif
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-bold text-xl leading-[30px]">{{ $testimonial->client_name }}</p>
                            <p class="text-lg text-[#878C9C]">{{ $testimonial->client_position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="FAQ" class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0">
    <div class="flex flex-col lg:flex-row gap-[40px] lg:gap-[70px] items-start lg:items-center pt-[100px] pb-[150px]">
        <div class="flex flex-col gap-[30px] w-full">
            <div class="w-20 h-20 flex shrink-0 rounded-full bg-portto-purple items-center justify-center">
                <img src="{{ asset('images/icons/messages.svg') }}" alt="icon">
            </div>
            <div class="flex flex-col gap-[10px]">
                <h2 class="font-extrabold text-[32px] leading-[42px] md:text-[42px] md:leading-[56px] lg:text-[50px] lg:leading-[70px]">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-[#878C9C]">If you have any question please contact me.</p>
            </div>
            <a href="{{ route('booking.create') }}" class="bg-portto-black font-bold text-lg text-white rounded-full px-[30px] py-[14px] w-fit transition-all duration-300 hover:bg-white hover:text-portto-black hover:ring hover:ring-portto-black">
                Contact Me
            </a>
        </div>

        <div class="flex flex-col gap-[30px] w-full lg:w-[603px] shrink-0">
            @foreach($faqs as $index => $faq)
                <div class="flex flex-col p-5 rounded-2xl bg-[#F4F5F8] w-full">
                    <button class="accordion-button flex justify-between gap-3 items-center text-left" data-accordion="accordion-faq-{{ $index }}">
                        <span class="font-bold text-lg md:text-2xl">{{ $faq->question }}</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="{{ asset('images/icons/arrow-circle-down.svg') }}" class="transition-all duration-300" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-{{ $index }}" class="accordion-content hidden">
                        <p class="text-base md:text-[20px] leading-[30px] md:leading-[36px] pt-5">{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple overflow-hidden">
    <div class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 flex flex-col lg:flex-row justify-between gap-10 pt-[60px] md:pt-[100px] pb-[50px] mb-[50px] relative border-b border-[#585867]">
        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute h-[300px] top-[70px] -left-[20px] z-0" alt="icon">

        <div class="flex shrink-0 h-fit z-10">
            @if(!empty($siteSetting?->logo))
                <img src="{{ asset('storage/' . $siteSetting->logo) }}" alt="logo" class="h-10 md:h-auto">
            @endif
        </div>

        <div class="flex flex-col sm:flex-row gap-[40px] md:gap-[100px] z-10">
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Explore</p>
                <a href="#Services" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Services</a>
                <a href="#Testimonials" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Testimonials</a>
                <a href="{{ route('blog.index') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">Blog</a>
                <a href="#FAQ" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">About</a>
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Connect</p>
                <a href="#" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]">
                    <img src="{{ asset('images/icons/call.svg') }}" alt="icon">{{ $siteSetting->contact_phone ?? '-' }}
                </a>
                <a href="#" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]">
                    <img src="{{ asset('images/icons/sms.svg') }}" alt="icon">{{ $siteSetting->contact_email ?? '-' }}
                </a>
            </div>
        </div>
    </div>

    <p class="text-sm text-[#A0A0AC] text-center">
        All Rights Reserved. Copyright {{ date('Y') }}.
    </p>
</footer>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('mainNavbar');
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const accordionButtons = document.querySelectorAll('.accordion-button');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-portto-black/90', 'backdrop-blur-md', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-portto-black/90', 'backdrop-blur-md', 'shadow-lg');
            }
        });

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });

            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', function () {
                    mobileMenu.classList.add('hidden');
                });
            });
        }

        accordionButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-accordion');
                const content = document.getElementById(targetId);
                const icon = this.querySelector('img');

                if (content) {
                    content.classList.toggle('hidden');
                }

                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            });
        });
    });
</script>
@endpush