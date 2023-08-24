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
            В 2010'ом я закончил учёбу на программиста в УПК (Екатеринбург), однако, затем много лет работал в интерьерной сфере - сначала продавцом, потом комплектовщиком объектов дизайнеров/архитекторов и светоинженером. Последние пару лет этого пути я работал уже на себя.
          </p>
          <p class="text-sm xl:text-base dark:text-gray-400 mb-5">
            К концу 2021'го мои страсть и энтузиазм в этом направлении сошли на нет, и в начале 2022'го я принял решение заново учиться на программиста-разработчика, выбрав
            <span class="text-amber-500 font-bold">BACKEND</span> как основное направление и
            <span class="text-amber-500 font-bold">PHP</span> как первый язык. Конечно, без чуточки
            <span class="text-amber-500 font-bold">JavaScript</span> тоже не обошлось.
          </p>
          <p class="text-sm xl:text-base dark:text-gray-400 mb-8">
            Активно учиться я начал с 6'го апреля 2022'го, учился-учился, в той или иной мере я освоил
            <span class="text-amber-500 font-bold">HTML, CSS, PHP (OOP PHP), MySQL, JavaScript, Docker, Git, Linux (Ubuntu через WSL2), Laravel, немного AlpineJS и Tailwind CSS</span>.
            Теперь ищу команду с классными ребятами, чтобы развиваться дальше.
          </p>
          <div class="w-fit m-auto lg:ml-0 lg:mr-auto">
            <x-button-link href="https://vk.com/dimaboronox" variant="red" target="_blank">
              Full story again
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About section end -->