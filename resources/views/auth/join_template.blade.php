<?php $back = isset($back_button) && $back_button; ?>
<div class="auth-page join-page">
    <div class="row">
        <div class="section section-left animated fadeInLeft">
            <div class="row details">
                <div class="col-md-10 col-md-offset-2">
                    <a href="/">
                    </a>
                    <h2 class="auth-title">@lang('auth.sign_up_title')</h2>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    <a @if(!$back) href="/home" @endif class="close-link animated-hover">
                        <p>@lang('auth.back')</p></a>
                </div>
            </div>
        </div>
        <div class="section section-right animated fadeInRight">
            <div class="col-md-9">
                <div class="form-wrapper">
                    {!! \TokenChef\IcoTemplate\Services\WidgetService::get_join_form() !!}
                    <button class="btn sign-up-button form-button join-form-btn loading-hide">@lang('auth.sign_up_button')</button>
                    @include('partials.loading_button')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-modals">
    @include('documents.terms_and_conditions_modal')
    <div class="scroll-down hidden" id="termsModalScroll"><span class="icon-arrow_down"></span></div>
</div>