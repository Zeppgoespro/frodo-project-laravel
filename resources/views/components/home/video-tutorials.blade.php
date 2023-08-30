<!-- ====== Cards section start -->
	<section id="education" class="dark:bg-slate-800 pt-24 pb-16">
		<div class="container">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full px-4">
					<div class="text-center mx-auto	mb-[60px] max-w-[600px]">
						<h2 class="font-bold text-3xl text-dark dark:text-gray-300 mb-4">
							Где я учился?
						</h2>
						<p class="mb-4">
							<a
								href="/full-story#education"
								class="text-base text-subprimary font-bold no-underline hover:underline underline-offset-2 decoration-2 decoration-subprimary"
							>Здесь подробнее!</a>
						</p>
						<p class="text-base text-body-color">
							Очень много YouTube! Program With Gio, The Codeholic, freeCodeCamp. Ещё Mozilla Developer Network etc. <br/>
							Некоторые образцы моих источников представлены ниже.
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
					href="/full-story#education"
					class="rounded-lg"
				>
					Больше информации
				</x-button-link>
			</div>
		</div>
	</section>
<!-- ====== Cards section end -->