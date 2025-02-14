@use('App\Helpers\Locale')

<!-- Header -->
<div class="header header-animated header-fixed u-unselectable blurbg" style="border-bottom: 1px solid">
	<div class="header-brand">
		<a href="/ristorante">
			<h2 class="pinyon text-black pt-1">Ristorante</h2>
		</a>

		<div class="nav-item nav-btn" id="header-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="header-nav" id="header-menu" role="button">
		<div class="nav-right">
			<!-- Language selector -->
			<div class="nav-item">
				{{ Locale::makeLangLinks('text-black') }}
			</div>

			<x-nav-item color="text-black" href="chi-siamo">
				{{ __('ristorante.header.chi-siamo') }}
			</x-nav-item>

			<x-nav-item color="text-black" href="galleria">
				{{ __('ristorante.header.galleria') }}
			</x-nav-item>

			<x-nav-item color="text-black" href="recapiti">
				{{ __('ristorante.header.recapiti') }}
			</x-nav-item>
		</div>
	</div>
</div>
