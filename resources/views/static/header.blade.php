@use('App\Helpers\Locale')
@use('App\Helpers\Url')

<!-- Header -->
<div class="header header-fixed u-unselectable u-shadow-none blurbg" style="border-bottom: 1px solid">
<div class="header-brand">
	<a href="{{ URL::subUrl() }}">
		<img src="{{ Vite::asset('resources/img/salonia.png') }}" alt="Logo"
		style="min-width: 180px; width: 13rem; padding: .3rem">
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
			{{ Locale::makeLangLinks() }}
		</div>
	</div>
</div>
</div>
