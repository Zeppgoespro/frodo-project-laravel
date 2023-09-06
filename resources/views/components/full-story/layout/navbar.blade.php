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
              width="40"
              height="40"
              viewBox="-4 -4 520 520"
              class="fill-current"
            >
              <path d="M48,256c0,114.87,93.13,208,208,208s208-93.13,208-208S370.87,48,256,48,48,141.13,48,256Zm212.65-91.36a16,16,0,0,1,.09,22.63L208.42,240H342a16,16,0,0,1,0,32H208.42l52.32,52.73A16,16,0,1,1,238,347.27l-79.39-80a16,16,0,0,1,0-22.54l79.39-80A16,16,0,0,1,260.65,164.64Z"/>
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