<x-app>
    <h1 class="font-bold text-4xl mb-6">Explore Users</h1>
    <div>
        @foreach ($users as $user)
            <a href="{{ route('profile', $user->id) }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}"
                     alt="{{ $user->username }}'s avatar"
                     width="60"
                     class="mr-4 rounded"
                >

                <div>
                    <h4 class="font-bold">{{ '@' . $user->name }}</h4>
                </div>
            </a>
            <hr>
        @endforeach
    </div>
</x-app>
