<x-app-layout>

    <x-container class="flex flex-col flex-nowrap content-start gap-1 mb-4">
        <h2 class="text-lg mb-4 text-gray-500">Friend request</h2>

        @foreach ($request as $user)
        <x-card>
            <div class="flex justify-between">

                {{ $user->name }}
                <form action="{{ route('friends.update', $user) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="px-2 py-1 rounded-md bg-yellow-500 text-black"
                    type="submit">Confirm</button>
                </form>
            </div>
        </x-card>
        @endforeach

        <h2 class="text-lg mb-4 text-gray-500">Sent request</h2>

        @foreach ($sent as $user)
        <x-card>
            {{ $user->name }}
        </x-card>
        @endforeach

        <h2 class="text-lg mb-4 text-gray-500">Friends</h2>

        @foreach ($friends as $user)
        <x-card>
            {{ $user->name }}
        </x-card>
        @endforeach
    </x-container>
</x-app-layout>
