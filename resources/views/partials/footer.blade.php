<footer class="bg-portto-black text-white pb-[50px] border-t-[10px] border-portto-purple overflow-hidden">
    <div class="container max-w-[1130px] mx-auto px-4 md:px-6 lg:px-0 flex flex-col lg:flex-row justify-between gap-10 pt-[60px] md:pt-[100px] pb-[50px] mb-[50px] relative border-b border-[#585867]">
        <img src="{{ asset('images/Ellipse.svg') }}" class="absolute h-[300px] top-[70px] -left-[20px] z-0" alt="icon">

        <div class="flex shrink-0 h-fit z-10">
            @if(!empty($siteSetting?->logo))
                <img src="{{ asset('storage/' . $siteSetting->logo) }}" alt="logo" class="h-10 md:h-auto">
            @else
                <span class="text-white font-bold text-2xl">{{ $siteSetting->site_name ?? 'Logo' }}</span>
            @endif
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[40px] md:gap-[70px] z-10">
            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Explore</p>
                <a href="{{ route('home') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Home
                </a>
                <a href="{{ route('services.index') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Services
                </a>
                <a href="{{ route('home') }}#Testimonials" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Testimonials
                </a>
                <a href="{{ route('blog.index') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Blog
                </a>
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Services</p>
                @if(isset($services) && $services->count())
                    @foreach($services->take(4) as $service)
                        <a href="{{ route('services.show', $service->slug) }}"
                           class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                            {{ $service->title }}
                        </a>
                    @endforeach
                @else
                    <a href="{{ route('services.index') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                        View All Services
                    </a>
                @endif
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">About</p>
                <a href="{{ route('home') }}#FAQ" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    FAQ
                </a>
                <a href="{{ route('home') }}#Services" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    My Services
                </a>
                <a href="{{ route('home') }}#Projects" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Projects
                </a>
                <a href="{{ route('booking.create') }}" class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300">
                    Book a Meeting
                </a>
            </div>

            <div class="flex flex-col gap-5">
                <p class="font-bold text-lg">Connect</p>

                <a href="tel:{{ preg_replace('/\s+/', '', $siteSetting?->contact_phone ?? '') }}"
                   class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]">
                    <img src="{{ asset('images/icons/call.svg') }}" alt="icon">
                    {{ $siteSetting?->contact_phone ?? '-' }}
                </a>

                <a href="mailto:{{ $siteSetting?->contact_email ?? '' }}"
                   class="font-medium hover:font-semibold hover:text-portto-light-gold transition-all duration-300 flex items-center gap-[6px]">
                    <img src="{{ asset('images/icons/sms.svg') }}" alt="icon">
                    {{ $siteSetting?->contact_email ?? '-' }}
                </a>

                @if(!empty($siteSetting?->address))
                    <div class="font-medium flex items-start gap-[6px] text-white/80">
                        <span>📍</span>
                        <span>{{ $siteSetting->address }}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <p class="text-sm text-[#A0A0AC] text-center px-4">
        All Rights Reserved. Copyright {{ date('Y') }}.
    </p>
</footer>