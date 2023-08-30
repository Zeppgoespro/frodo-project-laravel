<!-- ====== About section start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt="Me"
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me2.png') }}"
                alt="Me again"
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me3.png') }}"
                alt="Another me"
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-8 lg:mt-0">
          <span class="font-semibold mb-5 block">
            <blockquote class="text-sm xl:text-base text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
              "Никогда не сдавайся и больше улыбайся!"
            </blockquote>
          </span>
          <h2 class="font-bold text-2xl xl:text-3xl dark:text-gray-200 mb-6">
            Про меня
          </h2>
          <p class="text-sm xl:text-base dark:text-gray-400 mb-5">
            В 2010 году я окончил обучение на программиста в УПК (Екатеринбург), однако затем много лет работал в интерьерной сфере: сначала в качестве продавца, потом как комплектовщик объектов дизайнеров/архитекторов и светотехнического специалиста. В последние пару лет этого пути я работал уже на себя.
          </p>
          <p class="text-sm xl:text-base dark:text-gray-400 mb-5">
            К концу 2021 года мои страсть и энтузиазм к этому направлению иссякли, и в начале 2022 года я принял решение заново обучаться на программиста-разработчика, выбрав
            <span class="text-amber-500 font-bold">BACKEND</span> в качестве основного направления и
            <span class="text-amber-500 font-bold">PHP</span> в качестве первого языка. Конечно же, не обошлось и без чуточки
            <span class="text-amber-500 font-bold">JavaScript</span>.
          </p>
          <p class="text-sm xl:text-base dark:text-gray-400 mb-8">
            Активно учиться я начал с 6 апреля 2022 года. Учился, учился, и, в той или иной мере, освоил
            <span class="text-amber-500 font-bold">HTML, CSS, PHP (OOP PHP), MySQL, JavaScript, Docker, Git, Linux (Ubuntu через WSL2), Laravel, а также немного AlpineJS и Tailwind CSS</span>.
            Сейчас ищу команду с классными ребятами, чтобы продолжать развиваться дальше.
          </p>
          <div class="w-fit m-auto lg:ml-0 lg:mr-auto">
            <x-button-link href="/full-story" variant="red">
              Full story again
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About section end -->