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
                <li>
                    <a href="{{ route('home') }}" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}#Services" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}#Testimonials" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">
                        Testimonials
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}#FAQ" class="font-medium text-base xl:text-lg hover:text-portto-light-gold transition-all duration-300">
                        About
                    </a>
                </li>
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
            <a href="{{ route('home') }}" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">
                Home
            </a>
            <a href="{{ route('services.index') }}" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">
                Services
            </a>
            <a href="{{ route('home') }}#Testimonials" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">
                Testimonials
            </a>
            <a href="{{ route('blog.index') }}" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">
                Blog
            </a>
            <a href="{{ route('home') }}#FAQ" class="font-medium text-base hover:text-portto-light-gold transition-all duration-300">
                About
            </a>

            <a href="{{ route('booking.create') }}"
               class="bg-portto-light-gold text-portto-black text-center font-bold text-base px-6 py-3 rounded-full transition-all duration-300">
                Hire Me
            </a>
        </div>
    </div>
</nav>