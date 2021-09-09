<li class="user-currency pos-relative">
    <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
    <ul class="expand-dropdown-menu dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img src="{{ config('app.url') }}/img/icon/flag/icon_{{$localeCode}}.png" alt="{{ $properties['native'] }}"/>
                {{ $properties['native'] }}
            </a>
        </li>
        @endforeach
    </ul>
</li>
