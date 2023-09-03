<!-- ====== Navbar section start -->
<header
  class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>
  <div class="container">
    <div class="flex -mx-4 items-center justify-between relative">
      <ul class="w-1/3 flex items-center justify-start">
        <x-layout.navbar-item href="/" class="mx-5 xl:mr-8">
          <button
            class="
              w-10
              h-10
              flex
              items-center
              justify-center
              rounded-full
              text-dark
              dark:text-white
              hover:text-white
              hover:bg-primary
            "
          >
            <svg
              width="39"
              height="39"
              viewBox="-3.2 -2.5 30 30"
              class="fill-current"
            >
              <path d="M20.22,4.63C18.79,3,15.72,2,12,2h0C8.28,2,5.21,3,3.78,4.63c-2.38,2.76-2.38,12,0,14.74C5.21,21,8.28,22,12,22s6.79-1,8.22-2.63C22.6,16.61,22.6,7.39,20.22,4.63ZM13.66,14.75a1,1,0,0,1,.09,1.41,1,1,0,0,1-.75.34,1,1,0,0,1-.66-.25l-4-3.5a1,1,0,0,1,0-1.5l4-3.5a1,1,0,1,1,1.32,1.5L10.52,12Z"/>
            </svg>
          </button>
        </x-layout.navbar-item>
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