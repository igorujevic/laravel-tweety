<ul>
  <li>
    <a href="{{ route('home') }}" class="font-bold text-lg mb-4 black">Home</a>
  </li>
  <li>
    <a href="/explore" class="font-bold text-lg mb-4 black">Explore</a>
  </li>
  <li>
    <a href="/#" class="font-bold text-lg mb-4 black">Notifications</a>
  </li>
  <li>
    <a href="/#" class="font-bold text-lg mb-4 black">Messages</a>
  </li>
  <li>
    <a href="/#" class="font-bold text-lg mb-4 black">Bookmarks</a>
  </li>
  <li>
    <a href="/#" class="font-bold text-lg mb-4 black">Lists</a>
  </li>
  <li>
    <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 black">Profile</a>
  </li>
  <li>
    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="font-bold text-lg mb-4 black">Logout</button>
    </form>
  </li>
</ul>
