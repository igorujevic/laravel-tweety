<div class="border border-blue-400 rounded-lg mb-8 py-6 px-8">
  <form method="POST" action="/tweets">
    @csrf
    <textarea
      name="body"
      id="body"
      class="w-full outline-none"
      placeholder="What's up doc?"
      required
    >
    </textarea>
    <hr class="my-4">
    <footer class="flex justify-between">
      <img
        src="{{ auth()->user()->avatar }}"
        alt="avatar"
        class="rounded-full mr-2"
        width="50"
        height="50">
      <button
        type="submit"
        class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
        Tweet-a-roo!
      </button>
    </footer>
  </form>
  @error('body')
      <p class="text-red-500 text-sm mt-2"> {{ $message }} </p>
  @enderror
</div>
