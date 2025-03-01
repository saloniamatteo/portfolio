@include('static/head', [
    "lang"  => app()->getLocale(),
    "title" => __('ristorante.title'),
    "desc"  => __('ristorante.desc'),
	"favicon" => 'resources/img/ristorante/cover.png',
])

<body>
@include('static/header-ristorante')

<div style="padding: 1.6rem 0"></div>

<!-- Restaurant-->
<div class="hero u-text-center" id="ristorante">
<div class="hero-body" style="background: url({{ Vite::asset('resources/img/ristorante/banner.jpg') }})">
<div class="content pt-6">
	<!-- Logo -->
	<figure class="u-center mt-0">
		<img alt="Logo" class="h-16"
		src="{{ Vite::asset('resources/img/ristorante/logo.png') }}">
	</figure>

	<!-- Text -->
	<div>
		<!-- Title -->
		<h2 class="text-white shadow">
			Ristorante <em>&ldquo;Il mio&bdquo;</em>
		</h2>

		<!-- Desc -->
		<h5 class="text-white shadow">
			{{ __('ristorante.logo-desc') }}
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
	<x-title-playball id="chi-siamo">
		{{ __('ristorante.header.chi-siamo') }}
	</x-title-playball>

	<!-- Desc -->
	<p class="text-black text-lg w-90p u-center nunito">
		{{ __('ristorante.chi-siamo') }}
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
	<x-title-playball id="galleria">
		{{ __('ristorante.header.galleria') }}
	</x-title-playball>

	<div class="space"></div>

	<!-- Spaghetti allo scoglio -->
	<x-item font="playball">
		<x-slot:title>
			Spaghetti allo scoglio
		</x-slot>

		<x-slot:price>
			7,50
		</x-slot>

		<x-slot:desc>
			{{ __('ristorante.galleria.spaghetti.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('ristorante.galleria.spaghetti.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/ristorante/spaghetti.jpg') }}
		</x-slot>
	</x-item>

	<!-- Mix di mare -->
	<x-item font="playball">
		<x-slot:title>
			Mix di mare
		</x-slot>

		<x-slot:price>
			5,50
		</x-slot>

		<x-slot:desc>
			{{ __('ristorante.galleria.mix.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('ristorante.galleria.mix.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/ristorante/mix.jpg') }}
		</x-slot>
	</x-item>

	<!-- Aragosta -->
	<x-item font="playball">
		<x-slot:title>
			Coda di Aragosta
		</x-slot>

		<x-slot:price>
			12,50
		</x-slot>

		<x-slot:desc>
			{{ __('ristorante.galleria.aragosta.desc') }}
		</x-slot>

		<x-slot:ingredients>
			{{ __('ristorante.galleria.aragosta.ingredients') }}
		</x-slot>

		<x-slot:src>
			{{ Vite::asset('resources/img/ristorante/aragosta.jpg') }}
		</x-slot>
	</x-item>
</div>
</div>
</div>

<div class="divider w-30p u-center"></div>

<!-- Recapiti -->
<div class="hero u-text-center" id="recapiti">
<div class="hero-body">
<div class="content pt-6">
	<!-- Title -->
	<x-title-playball id="recapiti">
		{{ __('ristorante.recapiti.title') }}
	</x-title-playball>

	<!-- Desc -->
	<p class="text-lg nunito">
		{{ __('ristorante.recapiti.desc') }}
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
					{{ __('ristorante.recapiti.location') }}
				</h2>

				<p class="text-lg">
					<a class="text-black u u-LR"
				    href="https://www.google.com/maps/search/Corso+Italia+97100+Ragusa+RG">
					   Corso Italia s/n, Ragusa (RG)
					</a>
				</p>

				<!-- Phone num -->
				<h2 class="title">
					{{ __('ristorante.recapiti.tel') }}
				</h2>

				<p class="text-lg">
					<a class="text-black u u-LR" href="tel:+390932000000">
						(+39) 0932 000000
					</a>
				</p>

				<!-- Hours -->
				<h2 class="title">
					{{ __('ristorante.recapiti.hours.title') }}
				</h2>

				<!-- Monday-Friday -->
				<p class="text-lg my-0">
					{{ __('ristorante.recapiti.hours.mon-fri') }}:&thinsp;
					<strong>20:00-23:30</strong>
				</p>

				<!-- Saturday -->
				<p class="text-lg my-0">
					{{ __('ristorante.recapiti.hours.sat') }}:&thinsp;
					<strong>20:00-01:00</strong>
				</p>

				<!-- Sunday -->
				<p class="text-lg my-0">
					{{ __('ristorante.recapiti.hours.sun') }}:&thinsp;
					<strong>20:00-00:00</strong>
				</p>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@include('static/footer-ristorante')
</body>
</html>
