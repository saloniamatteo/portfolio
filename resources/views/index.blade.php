@use('App\Helpers\Url')
@include('static/head', [
    "lang"  => app()->getLocale(),
    "title" => __("index.title"),
    "desc"  => __("index.desc"),
])

<body>
@include('static/header')

<!-- Portfolio -->
<x-hero class="mt-4" id="index">
	<x-slot:title>
		{{ __("index.welcome.title") }}
	</x-slot>

	<x-slot:desc>
		{{ __("index.welcome.desc") }}
	</x-slot>

	<!-- Websites -->
	<x-card class="m-3">
		<!-- Ristorante -->
		<x-tile>
			<x-icon link="{{ Url::subUrl('ristorante') }}" icon="fish">

			<div class="tile__container">
				<p class="tile__title text-blue-700">
					{{ __("index.websites.ristorante.title") }}
				</p>

				<p class="tile__subtitle text-black">
					{{ __("index.websites.ristorante.desc") }}
				</p>
			</div>
			</x-icon>
		</x-tile>

		<div class="divider"></div>

		<!-- Pizzeria -->
		<x-tile>
			<x-icon link="{{ Url::subUrl('pizzeria') }}" icon="pizza">

			<div class="tile__container">
				<p class="tile__title text-blue-700">
					{{ __("index.websites.pizzeria.title") }}
				</p>

				<p class="tile__subtitle text-black">
					{{ __("index.websites.pizzeria.desc") }}
				</p>
			</div>
			</x-icon>
		</x-tile>
	</x-card>

	@include('static/home')
</x-hero>

@include('static/footer')
</body>
</html>
