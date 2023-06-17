<section xcomponent="@ErrorViews" class="width-24">
    <div xif="view=='default'"></div>
    <div xif="view=='is-error'" class="width-24 display-flex align-items-center justify-content-center device-height-24">
        <div>
            <div class="text-18"><span class="font-weight-bold padding-right-3">{{code}}.</span><span class="super-gray">{{description}}.</span></div>
            <div class="text-3 font-weight-300 margin-top-5">{{message}}</div>
        </div>
    </div>
</section>