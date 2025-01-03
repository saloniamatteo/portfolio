<div class="row">
    <!-- Text -->
    <div class="col-6">
    <div class="content u-text-left pt-0">
        <!-- Title -->
        <h2 class="title {{ $font }} u-inline-flex">
            {{ $title }}
        </h2>

        <span class="ml-2 font-bold {{ $font }} text-lg">
            € {{ $price ?? '' }}
        </span>

        <!-- Desc -->
        <p class="text-lg">{{ $desc }}</p>

        <!-- Ingredients -->
        <p>
        <em>
            {{ __('glob.ingredients') }}
            {{ $ingredients }}
        </em>
        </p>
    </div>
    </div>

    <!-- Image -->
    <div class="col-6">
        <div class="content" style="max-width: 400px">
            <img class="u-round-sm img-contain" src="{{ $src }}" alt="{{ $title }}">
        </div>
    </div>
</div>
