<ul>
    <li><a
            class="font-bold text-lg mb-4 bloack"
            href="/tweets"
        >Home</a></li>
    <li><a
            class="font-bold text-lg mb-4 bloack"
            href="/explore"
        >Explore</a></li>
    <li><a
            class="font-bold text-lg mb-4 bloack"
            href="/#"
        >Notifications</a></li>
    <li><a
            class="font-bold text-lg mb-4 bloack"
            href="{{ route('profile', auth()->user()->id) }}"
        >Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button class="font-bold text-lg">Logout</button>
        </form>
      </li>

</ul>
