<section class="home-top-section home-join-section center {{App::getLocale()}}">
    <div class="container center">
        <div class="row">
            <div class="col-md-12">
                <h2 class="top-title">@lang('home.join_telegram_title')</h2>
            </div>

            <div class="col-md-12 top-actions">
                <a href="{{\TokenChef\IcoTemplate\Services\StaticArray::TELEGRAM_URL}}" target="_blank" class="telegram-btn-wrapper">
                    <div class="btn-home">
                        <img src="/images/home/icon-telegram.png"
                             srcset="/images/home/icon-telegram@2x.png 2x,
             /images/home/icon-telegram@3x.png 3x"
                             class="icon-telegram"
                             alt="@lang('home.top_action_telegram')"
                        >
                        <span>@lang('home.top_action_telegram')</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>