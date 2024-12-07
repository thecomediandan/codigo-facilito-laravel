<x-app-layout>

    <x-container class="flex flex-col flex-nowrap content-start gap-1 mb-4">
        @if (! auth()->user()->isRelated($user) )
        <form action="{{ route('friends.store', $user) }}" method="POST">
            @csrf
            <button class="justify-self-start my-4 px-2 py-1 rounded-md bg-yellow-500 text-black"
            type="submit">Add friend</button>
        </form>
        @else
        <small class="text-blue-100 text-md">You are friends or your friendship is pending 😄</small>
        @endif

        <h3 class="text-lg mb-4 text-gray-500">{{ $user->name }}</h3>

        @foreach ($posts as $post)
        <x-card>

            {{ $post->body }}

            <div class="text-xs text-slate-500">
                {{ $post->created_at->diffforHumans() }}
            </div>
        </x-card>
        @endforeach
    </x-container>
    
</x-app-layout>
