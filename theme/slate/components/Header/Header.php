<header xcomponent="@Header" class="width-24 display-flex align-items-center">
    <div class="width-12 padding-left-8">
        <?php snippet('site-logo'); ?>
    </div>
    <div class="width-12 display-flex flex-direction-row-reverse height-24">
        <form class="display-flex align-items-center" onsubmit="blockAutoSubmit(event)">
            <div class="margin-right-3"></div>
            <?php snippet('input',['label'=>'App Key']); ?>
            <div class="margin-right-3"></div>
            <?php snippet('input',['label'=>'Product ID']); ?>
            <div class="margin-right-3"></div>
            <button xclick="submit()" class="clickable" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="arrow-left">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </button>
        </form>
    </div>
</header>