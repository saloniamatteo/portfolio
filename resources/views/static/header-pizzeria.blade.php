@use('App\Helpers\Locale')

<!-- Header -->
<div class="header header-animated header-fixed u-unselectable u-shadow-none" style="background-color: #1d1d1b">
	<div class="header-brand">
		<a href="/pizzeria">
			<h2 class="pinyon text-white mt-1 pt-1 pt-0-md">Pizzeria</h2>
		</a>

		<div class="nav-item nav-btn bg-white" id="header-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="header-nav" id="header-menu" role="button">
		<div class="nav-right">
			<!-- Language selector -->
			<div class="nav-item">
				{{ Locale::makeLangLinks('text-white') }}
			</div>

			<x-nav-item color="text-white" href="chi-siamo">
				{{ __('pizzeria.header.chi-siamo') }}
			</x-nav-item>

			<x-nav-item color="text-white" href="galleria">
				{{ __('pizzeria.header.galleria') }}
			</x-nav-item>

			<x-nav-item color="text-white" href="recapiti">
				{{ __('pizzeria.header.recapiti') }}
			</x-nav-item>
		</div>
	</div>
</div>