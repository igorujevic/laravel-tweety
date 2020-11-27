<x-app>
  <header class="mb-6 relative">
    <img
      class="rounded-xl mb-2"
      src="https://images.unsplash.com/photo-1533470192478-9897d90d5461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=806&q=80"
      alt="banner">

      <div class="flex justify-between items-center">
        <div>
          <h3 class="font-bold">{{ $user->name }}</h3>
          <p class="text-sm">{{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
          <a href="" class="rounded-full border py-2 px-2 text-black text-xs">Edit Profile</a>
          <a href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">Follow me</a>
        </div>
      </div>
      <p class="text-sm pt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, harum.</p>
      <img
        src="{{ $user->avatar }}"
        alt="avatar"
        class="rounded-full absolute"
        style="width: 150px; left: 50%; transform: translateX(-50%); bottom: 50px;">
  </header>
  <hr>
  @include('_timeline', [
    "tweets" => $user->tweets
  ])
</x-app>
