<!-- ====== Navbar section start -->
<header
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <ul class="block w-1/3 lg:flex lg:items-center">
        <x-layout.navbar-item href="/" class="mr-5 xl:mr-8"><< Назад!</x-layout.navbar-item>
      </ul>
      <div class="w-1/3 max-w-full">
        <a href="/" class="w-full flex items-center justify-center py-2">
          <img src="{{ url('/img/gear-logo-light.png') }}" alt="Logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden">
          <img src="{{ url('/img/gear-logo-dark.png') }}" alt="Logo" class="w-[48px] lg:w-[64px] hidden dark:inline-block">
          <span class="px-2 text-lg xl:text-xl font-bold text-subprimary dark:text-[#E5E7EB]">Zepp's Workshop</span>
        </a>
      </div>
      <div class="w-1/3 flex justify-end">
        <div class="mx-6 xl:mx-12">
          <x-layout.theme-button></x-layout.theme-button>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ====== Navbar section end -->