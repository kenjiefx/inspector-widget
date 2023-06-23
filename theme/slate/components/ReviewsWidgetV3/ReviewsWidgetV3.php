<section xcomponent="@ReviewsWidgetV3" class="width-24">
    <div class="width-14@desktop">
        <div xif="state=='loading'" class="display-flex align-items-center justify-content-center device-height-24">
            <div class="loader">
                <div class="loader-inner ball-scale-multiple">
                    <div class="background-color-primary"></div>
                    <div class="background-color-primary"></div>
                    <div class="background-color-primary"></div>
                </div>
            </div>
        </div>
        <div xif="state=='error'" class="display-flex align-items-center justify-content-center device-height-24">
            <div class="width-19">
                <?php component('PageError'); ?>
            </div>
        </div>
    </div>
    <div class="width-10@desktop group.item_separator--left">
        
    </div>
</section>