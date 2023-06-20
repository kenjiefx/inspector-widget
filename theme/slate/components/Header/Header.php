<header xcomponent="@Header" class="height-24 group.sidebar_width display-flex flex-direction-column position-fixed z-index-1 group.item_separator--right">
    <div class="small-height-13 display-flex align-items-center justify-content-center group.item_separator--bottom">
        <?php snippet('logo'); ?>
    </div>
    <div class="flex-grow-1 display-flex align-items-center justify-content-center">
        <?php component('RoutePanel'); ?>
    </div>
    <div class="padding-y-11 display-flex align-items-center justify-content-center">
        <div xclick="showBuildCard()" class="background-color-label-gray:hover color-elegant-black color-white:hover padding-y-11 medium-square-1 display-flex align-items-center justify-content-center border-radius-extra-large-1 cursor-pointer">
            <?php snippet('svg',[
                'class' => 'small-width-4 color-inherit',
                'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />'
            ]); ?>
        </div>
    </div>
</header>

