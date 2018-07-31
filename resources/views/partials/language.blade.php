<?php $active = App::getLocale(); ?>
<div class="language-select-wrapper" data-url="{{isset($redirect_language) ? $redirect_language : '/{LANG}'}}">
    <ul class="language-select animated fadeInDown">
        @foreach(array_merge(['en'], \TokenChef\IcoTemplate\Services\StaticArray::SUPPORTED_LANGUAGES) as $language)
            <li class="preload-lang-images {{$active === $language ? 'active' : ''}}" data-lang="{{$language}}">
                <div title="{{\TokenChef\IcoTemplate\Services\StaticArray::SUPPORTED_LANGUAGES_LONG[$language]}}"
                     class="img lang-tooltip {{$language}}"></div>
            </li>
        @endforeach
    </ul>
    <div class="down-icon"><i class="icon-chevron-down"></i> </div>
</div>
@include('partials.language_modal')