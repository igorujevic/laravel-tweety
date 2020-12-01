<x-master>
<div class="container mx-auto flex justify-center">
  <div class=" px-6 py-4 bg-gray-400 rounded-lg">
    <div class="font-bold text-lg mb-4">Login</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6">
                <label
                  for="email"
                  class="block mb-2 uppercase font-bold text-xs text-gray-700"
                  >
                  Email
                </label>
                <input
                  name="email"
                  id="email"
                  type="email"
                  autocomplete="email"
                  value="{{ old('email') }}"
                  required
                  class="border border-gray-400 p-2 w-full">

                @error('email')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
              <label
                for="password"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                Password
              </label>
              <input
                name="password"
                type="password"
                id="password"
                type="password"
                autocomplete="current-password"
                required
                class="border border-gray-400 p-2 w-full">

              @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
              @enderror
          </div>

          <div class="mb-6 flex justify-start">
            <input
              type="checkbox"
              id="remember"
              name="remember"
              {{ old('remember') ? 'checked' : '' }}
            >

              <label
              for="remember"
              class="ml-4 uppercase font-bold text-xs text-gray-700"
              >
              Remember Me
            </label>
          </div>

          <div>
            <button type="submit"
              class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            Submit
            </button>
            <a href="{{ route('password.request') }}">Forgot your password?</a>
          </div>

        </form>
  </div>
</div>
</x-master>
