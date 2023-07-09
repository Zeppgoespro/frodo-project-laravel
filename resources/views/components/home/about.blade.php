<!-- ====== About section start -->

<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.jpg') }}"
                alt="Me"
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me2.jpg') }}"
                alt="Me"
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me3.jpg') }}"
                alt="Me"
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
            <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
              "Everything is achievable with passion and dedication"
            </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            I have been bla bla bla and bla bla bla for many centuries. <br/>
            During bla bla bla and bla bla bla I am bla bla bla and bla bla bla,
            but very often bla bla bla bla that I am bla bla bla bla bla. <br/>
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            In 2022 I decided to bla bla bla and bla bla bla. Which are bla bla bla
            <span class="text-amber-500 font-bold">BLABLABLA</span> and
            <span class="text-amber-500 font-bold">BLABLABLA</span>. <br/>
            My content is mostly bla bla bla and bla bla bla. <br/>
          </p>
          <x-button-link href="https://vk.com/dimaboronox" variant="red" target="_blank">
            Find me here!
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== About section end -->