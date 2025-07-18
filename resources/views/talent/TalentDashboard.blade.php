<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-purple-700">
            Talent Dashboard
        </h2>
    </x-slot>

    <div class="max-w-5xl mx-auto mt-6 space-y-6">
        <!-- Welcome -->
        <div class="p-6 bg-white rounded-lg shadow">
            <p class="text-lg">Welcome, {{ Auth::user()->name }}! Ready to show off your work?</p>
        </div>

        <!-- Quick Action: Create Portfolio -->
        <div class="p-6 bg-purple-600 rounded-lg text-white flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold mb-1">Create Your First Portfolio</h3>
                <p class="text-sm">Upload images, add description, and start attracting clients.</p>
            </div>
            <a href="#" class="bg-white text-purple-700 px-4 py-2 rounded font-semibold hover:bg-purple-100 transition">
                + New Portfolio
            </a>
        </div>

        <!-- Placeholder: Your Portfolios -->
        <div class="p-6 bg-white rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Your Portfolios</h3>
            <p class="text-gray-700">You don't have any portfolios yet.</p>
        </div>
    </div>
</x-app-layout>
