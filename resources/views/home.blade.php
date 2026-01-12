<x-layout>
    <x-slot:title>
        Chirper - Home
    </x-slot:title>
    @foreach ($chirps as $chirp)
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to {{ $chirp['author'] }}!</h1>
                    <p class="mt-4 text-base-content/60">{{ $chirp['message'] }}</p>
                    <p>{{ $chirp['timestamp'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-layout>