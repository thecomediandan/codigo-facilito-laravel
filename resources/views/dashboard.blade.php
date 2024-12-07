<x-app-layout>

    <x-container class="flex flex-col flex-nowrap content-start gap-1 mb-4">
        <form action="{{ route('posts.store') }}" method="POST">
        <!-- Formulario seguro propio del sistema y no externo -->
            @csrf
            <textarea class="w-full bg-transparent text-slate-200 p-0 overflow-hidden resize-none outline-none h-9 rounded-md border-0 border-b-2 border-slate-500 focus:border-b-slate-400 focus:ring-0"
            name="body" placeholder="What's on your mind?"></textarea>
            <button class="justify-self-start my-4 px-2 py-1 rounded-md bg-yellow-500 text-black"
            type="submit">Submit</button>
        </form>

        @foreach ($posts as $post)
        <a href="{{ route('profile.show', $post->user) }}" class="px4 mb-2 flex items-center gap-2 font-medium text-slate-100">
            <svg class="h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            {{ $post->user->name }}
        </a>
        <x-card>
            {{ $post->body }}

            <div class="text-xs text-slate-500">
                {{ $post->created_at->diffforHumans() }}
            </div>
        </x-card>
        @endforeach
    </x-container>

    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
