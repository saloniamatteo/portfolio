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
	@vite(['resources/css/cirrus.min.css', 'resources/css/fonts/fonts.css'])

	<!-- JS -->
	@vite(['resources/js/main.js'])

	<!-- Overrides -->
	<style>
	.card { box-shadow: none }
	code { padding: .2rem }
	.shadow { text-shadow: 3px 3px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px  1px 0 #000, 1px  1px 0 #000 }
	</style>
</head>
