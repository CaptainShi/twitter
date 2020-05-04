<div class="flex p-4 border-b border-b-gray-400" style="position: relative">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user->id) }}">
            <img src="{{ $tweet->user->avatar }}"
                 alt="Your avatar"
                 class="rounded-full mr-2"
                 width="50"
                 height="50"
            >
        </a>
    </div>

    <div>
        <a href="{{ route('profile', $tweet->user->id) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        @if (auth()->user()->is($tweet->user))
            <form action="/tweets/{{ $tweet->id }}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm" style="position: absolute; right: 20px; top: 15px;">Delete</button>
            </form>
        @endif
        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <div class="flex">
            <form action="/tweets/{{ $tweet->id }}/like" method="POST">
                @csrf
                <div class="flex items-center mr-6">
                    <i class="far fa-thumbs-up mr-2"></i>
                    <button type="submit" class="text-xs">{{ $tweet->likes ?: 0}}</button>
                </div>
            </form>

            <form action="/tweets/{{ $tweet->id }}/like" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex items-center">
                    <i class="far fa-thumbs-down mr-2"></i>
                    <button type="submit" class="text-xs">{{ $tweet->dislikes ?: 0 }}</button>
                </div>
            </form>
        </div>

    </div>
</div>
