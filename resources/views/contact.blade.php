<!-- Contact Section -->
<div class="w-full h-auto bg-[#10194a] flex flex-col items-center justify-center text-center p-10 relative font-Anek">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 font-Eczar mt-10">Choose Your Perfect Adventure!</h1>
    <p class="text-white mb-6 max-w-2xl px-4">Explore El Nido with our four amazing tours! From island hopping to hidden lagoons, pristine beaches, and stunning sunset cruises—your perfect adventure awaits. Get in touch today!</p>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6 w-full max-w-6xl">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display Error Message -->
    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-6 w-full max-w-6xl">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-8 w-full max-w-6xl mt-[-40px] p-2">
        @csrf
        <!-- Full Name -->
        <div>
            <input type="text" id="name" name="name" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Full Name*" required>
        </div>
        <!-- Phone & Email -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="tel" id="phone" name="phone" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Phone Number*" required>
            <input type="email" id="email" name="email" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Email Address*" required>
        </div>
        <!-- Message -->
        <div>
            <textarea id="message" name="message" rows="4" class="w-full p-4 border-none rounded-md bg-white text-black placeholder-black shadow-md" placeholder="Enter your message..." required></textarea>
        </div>
        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="w-[200px] h-[50px] bg-white text-[#10194a] px-6 py-3 rounded-md font-medium hover:bg-gray-200 transition duration-300 shadow-lg transform hover:scale-105">
                Send Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ➜ 
            </button>
        </div>
    </form>
</div>
