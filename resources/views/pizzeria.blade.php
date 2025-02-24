@include('static/head', [
    "lang"  => app()->getLocale(),
    "title" => __('pizzeria.title'),
    "desc"  => __('pizzeria.desc'),
	"favicon" => 'resources/img/pizzeria/cover.png',
])

<body>
@include('static/header-pizzeria')

<div style="padding: 1.6rem 0; background-color: #1d1d1d"></div>

<!-- Pizzeria-->
<div class="hero u-text-center" id="pizzeria">
<div class="hero-body" style="background: url({{ Vite::asset('resources/img/pizzeria/banner.jpg') }})">
<div class="content pt-6">
	<!-- Logo -->
	<figure class="u-center mt-0">
		<img alt="Logo" class="h-16"
		src="{{ Vite::asset('resources/img/pizzeria/logo.png') }}">
	</figure>

	<!-- Text -->
	<div>
		<!-- Title -->
		<h2 class="title text-white shadow">
			Pizzeria <em>&ldquo;La mia&bdquo;</em>
		</h2>

		<!-- Desc -->
		<h5 class="subtitle text-white shadow">
			{{ __('pizzeria.logo-desc') }}
		</h5>
	</div>
</div>
</div>
</div>

<!-- Chi siamo -->
<div class="hero u-text-center">
<div class="hero-body">
<div class="content pt-6">
	<!-- Title -->
	<x-title-pinyon id="chi-siamo">
		{{ __('pizzeria.header.chi-siamo') }}
	</x-title-pinyon>

	<!-- Desc -->
	<p class="text-black text-lg w-90p u-center nunito">
		{{ __('pizzeria.chi-siamo') }}
	</p>
</div>
</div>
</div>

<div class="divider w-30p u-center"></div>

<!-- Galleria -->
<div class="hero u-text-center">
<div class="hero-body">
<div class="content pt-6">
	<!-- Title -->
	<x-title-pinyon id="galleria">
		{{ __('pizzeria.header.galleria') }}
	</x-title-pinyon>

	<div class="space"></div>

	<!-- Margherita -->
	<x-item font="pinyon">
		<x-slot:title>
			Margherita
		</x-slot>

		<x-slot:price>
			4,50
		</x-slot>

		<x-slot:desc>
			{{ __('pizzeria.galleria.margherita.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('pizzeria.galleria.margherita.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/pizzeria/margherita.jpg') }}
		</x-slot>
	</x-item>

	<!-- Diavola -->
	<x-item font="pinyon">
		<x-slot:title>Diavola</x-slot>

		<x-slot:price>
			5,50
		</x-slot>

		<x-slot:desc>
			{{ __('pizzeria.galleria.diavola.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('pizzeria.galleria.diavola.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/pizzeria/diavola.jpg') }}
		</x-slot>
	</x-item>

	<!-- Capricciosa -->
	<x-item font="pinyon">
		<x-slot:title>Capricciosa</x-slot>

		<x-slot:price>
			7,00
		</x-slot>

		<x-slot:desc>
			{{ __('pizzeria.galleria.capricciosa.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('pizzeria.galleria.capricciosa.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/pizzeria/capricciosa.jpg') }}
		</x-slot>
	</x-item>
</div>
</div>
</div>

<div class="divider w-30p u-center"></div>

<!-- Recapiti -->
<div class="hero u-text-center">
<div class="hero-body">
<div class="content pt-6">
	<!-- Title -->
	<x-title-pinyon id="recapiti">
		{{ __('pizzeria.recapiti.title') }}
	</x-title-pinyon>

	<!-- Desc -->
	<p class="text-lg nunito">
		{{ __('pizzeria.recapiti.desc') }}
	</p>

	<div class="space space--lg"></div>

	<div class="row">
		<!-- Google maps widget -->
		<div class="col-6">
			<div class="content u-text-left">
				<iframe loading="lazy" width="800" height="600" allowfullscreen=""
				class="u-round-sm" style="border: 0; height: 26rem"
				referrerpolicy="no-referrer-when-downgrade"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51037.001392317!2d14.669088131609609!3d36.91874510888651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x131199adbb2e54a9%3A0x27e898810ccef3ad!2s97100%20Ragusa%20RG!5e0!3m2!1sit!2sit!4v1718740037129!5m2!1sit!2sit"></iframe>
			</div>
		</div>

		<!-- Info -->
		<div class="col-6">
			<div class="content ml-2 u-text-left">
				<!-- Location -->
				<h2 class="title">
					{{ __('pizzeria.recapiti.location') }}
				</h2>

				<p class="text-lg">
					<a class="text-black u u-LR"
				    href="https://www.google.com/maps/search/Corso+Italia+97100+Ragusa+RG">
					   Corso Italia s/n, Ragusa (RG)
					</a>
				</p>

				<!-- Phone num -->
				<h2 class="title">
					{{ __('pizzeria.recapiti.tel') }}
				</h2>

				<p class="text-lg">
					<a class="text-black u u-LR" href="tel:+390932000000">
						(+39) 0932 000000
					</a>
				</p>

				<!-- Hours -->
				<h2 class="title">
					{{ __('pizzeria.recapiti.hours.title') }}
				</h2>

				<!-- Monday-Friday -->
				<p class="text-lg my-0">
					{{ __('pizzeria.recapiti.hours.mon-fri') }}:&thinsp;
					<strong>20:00-23:30</strong>
				</p>

				<!-- Saturday -->
				<p class="text-lg my-0">
					{{ __('pizzeria.recapiti.hours.sat') }}:&thinsp;
					<strong>20:00-01:00</strong>
				</p>

				<!-- Sunday -->
				<p class="text-lg my-0">
					{{ __('pizzeria.recapiti.hours.sun') }}:&thinsp;
					<strong>20:00-00:00</strong>
				</p>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@include('static/footer-pizzeria')
</body>
</html>
