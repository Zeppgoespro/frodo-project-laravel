<!-- ====== Hero section start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-800">
  <div class="container">
    <div class="flex flex-wrap justify-between -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="hero-content">
          <h1
            class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[36px] lg:text-[34px] xl:text-[36px] leading-snug mb-8"
          >
            Привет! Меня зовут <span class="rounded-md text-amber-600">Дима</span>. <br/>
            Я - начинающий <span class="rounded-md text-amber-600">Web Developer</span>!
          </h1>
          <p class="text-base mb-8 max-w-[600px]">
            <div class="mb-3">Тот самый толковый джуниор с прямыми руками, ясным умом и румяными щёчками, который обязательно нужен вашей команде для эффективной работы.</div>
            <div class="mb-3">Я очень хочу расти и развиваться, обучаясь мастерству на практике и перенимая полезный опыт у по-настоящему крутых разработчиков, чтобы самому стать крутым разработчиком, способным делать прекрасные вещи.</div>
            <div class="mb-8">Больше информации обо мне ниже по сайту. А ещё, мой друг, ты можешь найти меня во <a
              href="https://vk.com/dimaboronox"
              class="text-subprimary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-subprimary"
              target="_blank"
            >Вконтакте</a>!</div>
          </p>
          <ul>
            <li>
              <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                Мои проекты
              </x-button-link>
            </li>
          </ul>
          <div class="clients pt-16">
            <h6 class="font-normal text-sm flex items-center text-body-color dark:text-gray-300 mb-4">
              Follow me on social media
              <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
            </h6>
            <x-social-icons></x-social-icons>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-5/12 px-4">
        <div class="lg:text-right lg:mx-auto">
          <div class="relative inline-block z-10 pt-11 lg:pt-0">
            <img
              src="{{ url('/img/me-hero.png') }}"
              alt="Me"
              class="max-w-full rounded-2xl lg:mx-auto"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
              <svg
                width="93"
                height="93"
                viewBox="0 0 93 93"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero section end -->