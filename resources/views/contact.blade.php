<!-- Contact Us Section -->
<section id="contact" class="py-20 bg-gray-800">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Contact Us</h2>
        <p class="text-lg text-white mb-12">
            We'd love to hear from you! Please fill out the form below to get in touch.
        </p>

        <!-- Display Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display Error Message -->
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="max-w-2xl mx-auto bg-gray-700 p-8 rounded-lg shadow-lg">
            @csrf  <!-- CSRF Token for security -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-left text-white mb-2">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="email" class="block text-left text-white mb-2">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
            </div>
            <div class="mt-6">
                <label for="message" class="block text-left text-white mb-2">Your Message</label>
                <textarea id="message" name="message" rows="6" class="w-full p-4 border border-gray-500 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
            </div>
            <button type="submit" class="mt-6 bg-blue-800 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-600 transition duration-300">Send Message</button>
        </form>
    </div>
</section>
