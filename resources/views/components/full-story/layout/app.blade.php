<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
	x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || false }"
	:class="{ 'dark': darkMode }"
><!-- class="dark" -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Zepp's Story</title>

		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="icon" href="{{ asset('img/gear-logo-light.png') }}" type="image/png">

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	</head>
	<body class="antialiased text-gray-800 dark:text-gray-200">
		<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">

			<x-full-story.layout.navbar></x-full-story.layout.navbar>

			{{ $slot }}

			<x-layout.footer></x-layout.footer>

		</div>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>