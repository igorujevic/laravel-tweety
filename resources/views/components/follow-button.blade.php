@unless (current_user()->is($user))
<form method="POST" action="/profiles/{{ $user->username }}/follow">
  @csrf
  <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs outline-none">
    {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
  </button>
</form>
@endunless
