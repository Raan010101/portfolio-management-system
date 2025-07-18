<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-blue-700">
            Client Dashboard
        </h2>
    </x-slot>

    <div class="p-6 bg-white rounded-lg shadow">
        <p>It works! You are logged in as: {{ Auth::user()->name }} ({{ Auth::user()->role }})</p>
    </div>
</x-app-layout>
