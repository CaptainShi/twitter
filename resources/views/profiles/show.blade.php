<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/911GT3RS.jpg"
                 alt="Banner Picture"
                 style="width: 700px; border-radius: 10%;"
                 class="mb-2"
            >

            <img src="{{ $user->avatar }}"
                 alt="User Avatar"
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 -translate-y-1/2"
                 style="left: 50%;"
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 300px">
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined at {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @if (auth()->user()->is($user))
                    <a href="/profiles/{{ $user->id }}/edit" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endif

                @if (auth()->user()->isNot($user))
                    <form action="/profiles/{{ $user->id }}/follow" method="POST">
                        @csrf

                        <button type="submit"
                                class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
                        >
                            {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' :  'Follow Me'}}
                        </button>
                    </form>
                @endif
            </div>
        </div>

        <p class="text-sm">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
            book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>

    </header>

    @include('_timeline', ['tweets' => $tweets])
</x-app>
