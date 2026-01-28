<x-layout>
    <x-slot:title>
        Chirper - Home
    </x-slot:title>
    @forelse ($chirps as $chirp)
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}!</h1>
                    <p class="mt-4 text-base-content/60">{{ $chirp['message'] }}</p>
                    <p>{{ $chirp->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
    @empty
    <p class="text-center mt-8 text-base-content/60">No chirps yet. Be the first to chirp!  </p>
    @endforelse
</x-layout>