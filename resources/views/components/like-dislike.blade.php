<div class="flex items-center justify-start relative">
  <form method="POST" action="/tweets/{{ $tweet->id }}/like">
    @csrf
    <div>
      <button type="submit">
        <span
        class="fas fa-thumbs-up fa-lg {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        </span>
      </button>
      <span class="text-xs text-gray-500">
        {{ $tweet->likes ?: 0 }}
      </span>
    </div>
  </form>
  <form method="POST" action="/tweets/{{ $tweet->id }}/dislike">
    @csrf
    @method('DELETE')
    <div class="ml-4">
      <button type="submit">
        <span
        class="fas fa-thumbs-down fa-lg {{ $tweet->isDislikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
        </span>
      </button>
      <span class="text-xs text-gray-500">
        {{ $tweet->dislikes ?: 0 }}
      </span>
    </div>
  </form>
</div>
