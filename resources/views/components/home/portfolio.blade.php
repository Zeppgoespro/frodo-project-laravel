<!-- ====== Portfolio section start -->
<section
	id="portfolio"
	x-data="
		{
			selectedTab: 'all',
      activeClasses: 'bg-primary text-white',
      inactiveClasses: 'text-body-color hover:bg-primary hover:text-white'
		}
	"
	class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]"
>
	<div class="container">
		<div class="flex flex-wrap -mx-4">
			<div class="w-full px-4">
				<div class="text-center mx-auto mb-[60px] max-w-[510px]">
					<h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
						Мои проекты
					</h2>
					<p class="mb-4">
						<a
							href="https://github.com/Zeppgoespro"
							class="text-base text-subprimary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-subprimary"
							target="_blank"
						>Здесь мой GitHub!</a>
					<p class="text-base text-body-color">
						Пожалуйста, посмотри проекты, которые я сделал!
					</p>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap justify-center -mx-4">
			<div class="w-full px-4">
				<ul class="flex flex-wrap justify-center mb-12 space-x-1">
					<li class="mb-1">
						<button
							@click="selectedTab = 'all'"
							:class="selectedTab === 'all' ? activeClasses : inactiveClasses"
							class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition"
						>
							All projects
						</button>
					</li>
					@foreach ($tabs as $tab)
						<li class="mb-1">
							<button
								@click="selectedTab = '{{ $tab }}'"
								:class="selectedTab === '{{ $tab }}' ? activeClasses : inactiveClasses"
								class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition"
							>
								{{ $tab }}
							</button>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="flex flex-wrap -mx-4">
			@foreach ($items as $item)
				<x-portfolio-item
					:title="$item['title']"
					:categories="$item['category']"
					:image="$item['image']"
					:github="$item['github']"
				></x-portfolio-item>
			@endforeach
		</div>
	</div>
</section>
<!-- ====== Portfolio section end -->