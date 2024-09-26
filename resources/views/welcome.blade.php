<x-guest-layout>
    @if (Route::has('login'))
      <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
          @endif 
        @endauth
      </div>
    @endif

    Bienvenue sur mon site !
    <x-card>
        Ceci est une démo
    </x-card>

</x-guest-layout>
