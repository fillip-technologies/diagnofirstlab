<header class="hidden lg:block w-full bg-white shadow-sm">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center gap-2">


                <div class="leading-tight">
                    <h1 class="text-base font-bold bg-gradient-to-r from-primaryFrom to-primaryTo bg-clip-text text-transparent">
                        Diagno First Lab
                    </h1>
                    <p class="text-[10px] text-gray-500 tracking-wide uppercase">
                        Every Life Is Precious
                    </p>
                </div>
            </div>



            <!-- Nav -->
            <nav class="hidden lg:flex items-center gap-3 text-sm font-semibold">

                <!-- Tests -->
                <a href="{{ route('all-test') }}"
                    class="group flex items-center gap-2 px-4 py-2 rounded-md text-gray-700
              hover:text-white transition-all duration-300
              hover:bg-gradient-to-r hover:from-primaryFrom hover:to-primaryTo
              hover:shadow-lg hover:shadow-primaryFrom/30">

                    <i class="fa-solid fa-microscope text-primaryFrom group-hover:text-white"></i>
                    Tests
                </a>

                <!-- Packages -->
                <a href="{{ route('packages') }}"
                    class="group flex items-center gap-2 px-4 py-2 rounded-md text-gray-700
              hover:text-white transition-all duration-300
              hover:bg-gradient-to-r hover:from-primaryFrom hover:to-primaryTo
              hover:shadow-lg hover:shadow-primaryFrom/30">

                    <i class="fa-solid fa-box text-primaryFrom group-hover:text-white"></i>
                    Packages
                </a>

            </nav>


            <!-- Actions -->
            <div class="hidden lg:flex items-center gap-3 text-sm">


                <!-- Book Test (Gradient) -->
                <a href="#"
                    class="bg-gradient-to-r from-primaryFrom to-primaryTo text-white px-4 py-1.5 rounded-md font-semibold hover:opacity-90 transition  hover:bg-gradient-to-r hover:from-primaryFrom hover:to-primaryTo
              hover:shadow-lg hover:shadow-primaryFrom/30">
                    Book A Test
                </a>

                <!-- Download Reports (Outline small) -->
                <a href="#"
                    class="border border-primaryFrom text-primaryFrom px-4 py-1.5 rounded-md font-semibold hover:bg-primaryFrom hover:text-white transition  hover:bg-gradient-to-r hover:from-primaryFrom hover:to-primaryTo
              hover:shadow-lg hover:shadow-primaryFrom/30">
                    Download Reports
                </a>

                <!-- Cart (Gradient Green) -->
                <a href="#"
                    class="relative bg-gradient-to-r from-secondaryFrom to-secondaryTo text-white px-4 py-1.5 rounded-md font-semibold flex items-center gap-2 hover:opacity-90 transition  hover:bg-gradient-to-r hover:from- secondaryFrom hover:to- secondaryFrom
              hover:shadow-lg hover:shadow-primaryFrom/30">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart
                    <span
                        class="absolute -top-1.5 -right-1.5 bg-red-500 text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">
                        0
                    </span>
                </a>

                <!-- Login -->
                <a href="#"
                    class="bg-gradient-to-r from-primaryFrom to-primaryTo text-white px-4 py-1.5 rounded-md font-semibold hover:opacity-90 transition">
                    Login
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Header -->
<div class="lg:hidden flex items-center justify-between px-4 h-14 bg-white shadow-sm">
    <!-- Logo -->
    <div class="flex items-center gap-2">
        <img src="{{ asset('images/logo.png') }}" class="h-7" alt="">
        <span class="font-bold text-primaryFrom">LABS</span>
    </div>

    <!-- Actions -->
    <div class="flex items-center gap-3">
        <a href="#"
            class="bg-gradient-to-r from-primaryFrom to-primaryTo text-white px-3 py-1.5 rounded-md text-xs font-semibold">
            Book A Test
        </a>

        <!-- Menu Button -->
        <button onclick="openMenu()">
            <i class="fa-solid fa-bars text-xl text-gray-700"></i>
        </button>
    </div>
</div>
<!-- Overlay -->
<div id="menuOverlay"
    class="fixed inset-0 bg-black/40 z-40 hidden"
    onclick="closeMenu()"></div>

<!-- Mobile Menu -->
<div id="mobileMenu"
    class="fixed top-0 right-0 w-[85%] max-w-sm h-full bg-white z-50
            translate-x-full transition-transform duration-300">

    <!-- Menu Header -->
    <div class="flex items-center justify-between px-4 h-14 border-b">
        <img src="{{ asset('images/logo.png') }}" class="h-7">
        <button onclick="closeMenu()">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    <!-- Buttons -->
    <div class="p-4 space-y-3">
        <a href="#"
            class="block text-center border border-primaryFrom text-primaryFrom py-2 rounded-md font-semibold text-sm">
            ⬇ Download Reports
        </a>

        <a href="#"
            class="block text-center bg-gradient-to-r from-primaryFrom to-primaryTo text-white py-2 rounded-md font-semibold text-sm">
            ⬆ Upload Prescription
        </a>
    </div>

    <!-- Menu Links -->
    <div class="px-4 space-y-3 text-sm">
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">Home</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">All Test</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">All Packages</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">About Us</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">Terms & Conditions</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">Privacy Policy</a>
        <a href="#" class="block bg-gray-50 px-4 py-3 rounded-md shadow-sm">Contact Us</a>
    </div>
</div>
<script>
    function openMenu() {
        document.getElementById('mobileMenu').classList.remove('translate-x-full');
        document.getElementById('menuOverlay').classList.remove('hidden');
    }

    function closeMenu() {
        document.getElementById('mobileMenu').classList.add('translate-x-full');
        document.getElementById('menuOverlay').classList.add('hidden');
    }
</script>