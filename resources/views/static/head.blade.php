@use('App\Helpers\Locale')
@use('App\Helpers\Url')
@php
	if (isset($favicon))
		$favicon = Vite::asset($favicon);
	else
		$favicon = "/favicon.png";
@endphp

<!DOCTYPE html>
<html lang="{{ $lang ?? Locale::getDefaultLocale() }}">
<head>
	<title>{{ $title ?? 'Portfolio - Matteo Salonia' }}</title>

	<!-- Optimize page loading -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- SEO (do not include if "noseo" is set) -->
	@if (!isset($noseo))
	<meta name="description"				content="{{ $desc ?? __("glob.desc") }}">
	<meta property="og:description"			content="{{ $desc ?? __("glob.desc") }}">
	<meta property="twitter:description"	content="{{ $desc ?? __("glob.desc") }}">
	<meta property="og:title"				content="{{ $title ?? 'Portfolio - Matteo Salonia'}}">
	<meta property="twitter:title"			content="{{ $title ?? 'Portfolio - Matteo Salonia' }}">
	<meta property="og:url"					content="{{ $url ?? Url::getURL() }}">
	<meta property="og:image"				content="{{ $favicon }}">
	<meta property="twitter:image"			content="{{ $favicon }}">
	@endif

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ $favicon }}">

	<!-- CSS & Fonts -->
	@vite([
		'resources/css/cirrus.css',
		'resources/css/fonts/fonts.css',
		'resources/css/overrides.css',
	])

	<!-- JS -->
	@vite(['resources/js/main.js'])

	<!-- Check if head.after.blade.php exists, and include it -->
	@if (file_exists(resource_path("views/static/head-after.blade.php")))
		@include('static/head-after')
	@endif
</head>
