<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__top-content d-flex justify-content-between align-items-center">
                    <div class="header__top-content--left">
                        <span>Free Delivery: Take advantage of our time to save event</span>
                    </div>
                    <ul class="header__top-content--right user-set-role d-flex">
                        <li class="user-currency pos-relative">
                            <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>
                            <ul class="expand-dropdown-menu dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img src="../img/icon/flag/icon_{{$localeCode}}.png" alt="{{ $properties['native'] }}"/>
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="user-info pos-relative">
                            <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-expanded="false" >Select Currency <i class="fal fa-chevron-down"></i></a>
                            <ul class="expand-dropdown-menu dropdown-menu" >
                                <li><a href="#">USD</a></li>
                                <li><a href="#">POUND</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
