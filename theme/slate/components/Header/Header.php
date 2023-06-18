<header xcomponent="@Header" class="height-24 group.sidebar_width display-flex flex-direction-column position-fixed z-index-1 group.item_separator--right">
    <div class="small-height-13 display-flex align-items-center justify-content-center group.item_separator--bottom">
        <?php snippet('logo'); ?>
    </div>
    <div class="flex-grow-1 display-flex align-items-center justify-content-center">
        <?php component('RoutePanel'); ?>
    </div>
</header>