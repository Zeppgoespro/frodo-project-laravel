<!-- ====== Navbar section start -->
<header
  x-data="{navbarOpen: false}"
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <div class="ml-1 xs:ml-0 pr-4 w-80 max-w-full">
        <a href="/" class="w-full flex items-center py-2">
          <img src="{{ url('/img/gear-logo-light.png') }}" alt="Logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden">
          <img src="{{ url('/img/gear-logo-dark.png') }}" alt="Logo" class="w-[48px] lg:w-[64px] hidden dark:inline-block">
          <span class="px-2 text-lg xl:text-xl font-bold text-subprimary dark:text-[#E5E7EB]">Zepp's Workshop</span>
        </a>
      </div>
      <div class="flex px-4 justify-end items-center max-w-full">
        <div>
          <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'">
          </x-layout.navbar-hamburger>
          <nav
            :class="!navbarOpen && 'hidden'"
            id="navbarCollapse"
            class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
          >
            <ul class="block lg:flex lg:items-center">
              @foreach($navigationItems as $item)
                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
              @endforeach
            </ul>
          </nav>
        </div>
        <x-layout.theme-button class="mr-20 lg:mx-4 xl:mx-5"></x-layout.theme-button>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar section end -->