<div class="flex p-4 border-b border-b-gray-400">
  <div class="mr-4 flex-shrink-0">
    <img src="https://i.pravatar.cc/40?u={{ $tweet->user->email }}" alt="avatar" class="rounded-full">

  </div>
  <div>
    <h5 class="font-bold mb-4"> {{ $tweet->user->name}} </h5>
    <p class="text-sm"> {{ $tweet->body }} </p>
  </div>
</div>
