<header id="header" class="fixed top-0 left-0 right-0 bg-transparent z-50 transition-all duration-500 mt-8">
<style>
    #header {
        z-index: 9999; /* Super high to stay on top */
        position: fixed; /* Ensure it stays at the top */
        top: 0;
        left: 0;
        right: 0;
    }

</style>

    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo Section -->
            <div class="site-branding">
                <div class="site-logo">
                    <a href="{{ url('/') }}">
                        <img width="250" height="150" src="{{ asset('images/neptunelogo.png') }}" class="custom-logo w-[140px] md:w-[210px] transition-all duration-500" alt="Neptune Tours and Travels">
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-white hover:text-gray-600 focus:outline-none z-[60]">
                <svg class="menu-icon h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path class="hamburger" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path class="close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Navigation Menu -->
            <nav id="site-navigation" class="hidden md:flex flex-1 md:ml-[350px]"" aria-label="Primary menu">
                <ul class="flex justify-start space-x-20">
                    <li class="menu-item"><a href="#explore" class="text-white text-sm hover:text-gray-600 font-semibold font-Inter tracking-[0.2em]" style="font-family: 'Raleway', sans-serif;">TOURS</a></li>
                    <li class="menu-item"><a href="#contact" class="text-white text-sm hover:text-gray-600 font-semibold font-Inter tracking-[0.2em]" style="font-family: 'Raleway', sans-serif;">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden fixed inset-0 bg-[#040823] z-[55] h-screen overflow-y-auto">
            <div class="container mx-auto px-4 relative h-full">
                <div class="absolute top-3 left-0">
                    <div class="site-logo">
                        <a href="{{ url('/') }}">
                            <img width="250" height="150" src="{{ asset('images/neptunelogo.png') }}" class="custom-logo w-[140px] md:w-[210px] transition-all duration-500 ml-4 mt-8" alt="Neptune Tours and Travels">
                        </a>
                    </div>
                </div>
                <div class="h-full flex items-center justify-center">
                    <ul class="space-y-4 text-center">
                        <li><a href="#explore" class="block px-4 py-3 text-white text-lg hover:text-gray-600 font-bold font-Inter tracking-[0.2em]" style="font-family: 'Raleway', sans-serif;">TOURS</a></li>
                        <li><a href="#contact" class="block px-4 py-3 text-white text-lg hover:text-gray-600 font-bold font-Inter tracking-[0.2em]" style="font-family: 'Raleway', sans-serif;">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const header = document.getElementById('header');
    const logo = document.querySelector('.custom-logo');
    const hamburgerIcon = document.querySelector('.hamburger');
    const closeIcon = document.querySelector('.close');
    let lastScrollY = window.scrollY;
    let ticking = false;

    function toggleMenu() {
        mobileMenu.classList.toggle('hidden');
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    }

    mobileMenuButton.addEventListener('click', toggleMenu);

    // Throttled scroll handler for better performance
    function updateHeader() {
        if (window.scrollY > 0) {
            header.classList.add('bg-[#040823]', 'shadow-md');
            header.classList.remove('bg-transparent', 'mt-8');
            logo.style.transform = 'scale(0.9)';
        } else {
            header.classList.remove('bg-[#040823]', 'shadow-md');
            header.classList.add('bg-transparent', 'mt-8');
            logo.style.transform = 'scale(1)';
        }
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });

    // Initial check
    updateHeader();
</script>
