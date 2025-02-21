<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
    
        <a href="{{ route('home') }}">
            <x-application-logo/>
        </a>
        
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link href="{{ route('post.index') }}" :active="request()->routeIs('post.index')">
                    {{ __('Blog') }}
                </x-nav-link>

            </ul>
        </div>
    </div>
   @guest
  @include("layouts.partials.header-right-guest")
   @else
   @include("layouts.partials.header-right-auth")
   @endauth
</header>