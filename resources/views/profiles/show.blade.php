<x-app>
  <header class="mb-6 relative">
    <div class="relative">
      <img
      class="rounded-xl mb-2"
      src="https://images.unsplash.com/photo-1533470192478-9897d90d5461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=806&q=80"
      alt="banner"
      >

      <img
          src="{{ $user->avatar }}"
          alt="avatar"
          class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
          style="left: 50%"
          width="150"
      >
    </div>

    <div class="flex justify-between items-center">
      <div>
        <h3 class="font-bold">{{ $user->name }}</h3>
        <p class="text-sm">{{ $user->created_at->diffForHumans() }}</p>
      </div>

      <div class="flex">
        <a href="" class="mr-2 rounded-full border py-2 px-2 text-black text-xs">Edit Profile</a>
        <x-follow-button :user="$user"></x-follow-button>
      </div>
    </div>
    <p class="text-sm mt-2 pt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, harum.</p>

  </header>
  @include('_timeline', [
    "tweets" => $user->tweets
  ])
</x-app>
