<ul>
    <li><i class="fas fa-home"></i>
        <a
            class="font-bold text-lg mb-4 bloack"
            href="/tweets"
        >Home</a></li>
    <li><i class="fas fa-search"></i>
        <a
            class="font-bold text-lg mb-4 bloack"
            href="/explore"
        >Explore</a></li>
    <li><i class="fas fa-bell"></i>
        <a
            class="font-bold text-lg mb-4 bloack"
            href="/notifications"
        >Notifications</a></li>
    <li><i class="far fa-id-badge"></i>
        <a
            class="font-bold text-lg mb-4 bloack"
            href="{{ route('profile', auth()->user()->id) }}"
        >Profile</a></li>
    <li><i class="fas fa-sign-out-alt"></i>
        <form method="POST" action="/logout" style="display: inline">
            @csrf
            <button class="font-bold text-lg">Logout</button>
        </form>
      </li>

</ul>
