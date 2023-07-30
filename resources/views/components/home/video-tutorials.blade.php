<!-- Cards section start -->
	<section id="education" class="dark:bg-slate-800 pt-24 pb-16">
		<div class="container">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full px-4">
					<div class="text-center mx-auto	mb-[60px] max-w-[510px]">
						<h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
							Где я учился?
						</h2>
						<p class="text-base text-body-color mb-4">
							<a
								href=""
								class="text-subprimary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-subprimary"
							>Здесь подробнее!</a>
						</p>
						<p class="text-base text-body-color">
							Youtube, много youtube... Program With Gio, freeCodeCamp, Mozilla Developer Network etc. <br/>
							Вот некоторые образцы моих источников.
						</p>
					</div>
				</div>
			</div>
			<div class="flex flex-wrap -mx-4">
				@foreach($videoTutorials as $video)
					<x-video-tutorial-item
						:video-id="$video['videoId']"
						:title="$video['title']"
						:description="$video['description']"
					>
					</x-video-tutorial-item>
				@endforeach
			</div>
			<div class="flex justify-center">
				<x-button-link
					href="https://youtube.com/ProgramWithGio"
					target="_blank"
					class="rounded-lg"
				>
					Подробнее о том, как я учился...
				</x-button-link>
			</div>
		</div>
	</section>
<!-- Cards section end -->