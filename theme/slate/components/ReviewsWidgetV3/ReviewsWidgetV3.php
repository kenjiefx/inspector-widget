<section xcomponent="@ReviewsWidgetV3" class="width-24 display-flex@desktop">
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
        <div xif="state=='ok'">
            <div class="yotpo-widget-instance" data-yotpo-instance-id="{{instanceId}}" data-yotpo-product-id="{{productId}}"></div>
        </div>
    </div>
    <div class="width-10@desktop group.item_separator--left padding-top-18 display-flex justify-content-center">
        <div class="width-21 background-color-stale-white padding-top-21 padding-bottom-18 border-radius-extra-small-24 box-shadow-card-iphone static-height-max-content">
            <div class="padding-x-24 display-flex align-items-center">
                <div class="text-13 font-weight-bold letter-spacing--5">Reviews Widget</div>
            </div>
            <div class="margin-top-14"></div>
            <div class="group.item_separator--bottom"></div>
            <div class="margin-top-14"></div>
            <div class="padding-x-24 text-2 font-weight-300 line-height-16 color-label-gray">
                This preview is for the Reviews Widget version 3.0. Please know that any changes made here will NOT be synced to your Yotpo widget settings.
            </div>
            <div class="margin-top-21"></div>
            <div class="width-24 display-flex">
                <div class="width-6 display-flex align-items-center justify-content-center padding-y-9 cursor-pointer background-color-primary-extra-light:hover">
                    <?php snippet('svg',[
                            'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />',
                            'class' => 'small-width-4 margin-right-5 color-elegant-black'
                        ]); ?>
                    <div class="text-1 font-weight-500 color-elegant-black">About</div>
                </div>
                <div class="width-6 display-flex align-items-center justify-content-center padding-y-9 cursor-pointer">
                    <?php snippet('svg',[
                            'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />',
                            'class' => 'small-width-4 margin-right-5 color-elegant-black'
                        ]); ?>
                    <div class="text-1 font-weight-500 color-elegant-black">Settings</div>
                </div>
                <div class="width-6 display-flex align-items-center justify-content-center padding-y-9 cursor-pointer">
                    <?php snippet('svg',[
                            'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />',
                            'class' => 'small-width-4 margin-right-5 color-elegant-black'
                        ]); ?>
                    <div class="text-1 font-weight-500 color-elegant-black">CSS Editor</div>
                </div>
                <div class="width-6 display-flex align-items-center justify-content-center padding-y-9 cursor-pointer background-color-primary-extra-light:hover">
                    <?php snippet('svg',[
                            'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />',
                            'class' => 'small-width-4 margin-right-5 color-elegant-black'
                        ]); ?>
                    <div class="text-1 font-weight-500 color-elegant-black">Reviews</div>
                </div>
            </div>
            <div class="group.item_separator--bottom"></div>
            <div class="margin-top-14"></div>
            <div class="display-flex justify-content-center">
                <div class="width-24">
                    <div class="padding-x-24">
                        <div class="label letter-spacing-7 color-label-gray margin-bottom-9">App Key</div>
                        <div class="display-flex align-items-center">
                            <?php snippet('svg',[
                                'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />',
                                'class' => 'small-width-4 margin-right-7 color-elegant-black'
                            ]); ?>
                            <div class="text-1 font-weight-500 color-elegant-black">{{appKey}}</div>
                        </div>
                    </div>
                    <div class="margin-top-11"></div>
                    <div class="group.item_separator--bottom"></div>
                    <div class="margin-top-11"></div>
                    <div class="padding-x-24">
                        <div class="label letter-spacing-7 color-label-gray margin-bottom-9">Product ID</div>
                        <div class="display-flex align-items-center">
                            <?php snippet('svg',[
                                'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />',
                                'class' => 'small-width-4 margin-right-7 color-bored-gray'
                            ]); ?>
                            <div class="text-1 font-weight-500 color-elegant-black">{{productId}}</div>
                        </div>
                    </div>
                    <div class="margin-top-11"></div>
                    <div class="group.item_separator--bottom"></div>
                    <div class="margin-top-11"></div>
                    <div class="padding-x-24">
                        <div class="label letter-spacing-7 color-label-gray margin-bottom-9">Instance ID</div>
                        <div class="display-flex align-items-center">
                            <?php snippet('svg',[
                                'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />',
                                'class' => 'small-width-4 margin-right-7 color-elegant-black'
                            ]); ?>
                            <div class="text-1 font-weight-500 color-elegant-black">{{instanceId}}</div>
                        </div>
                    </div>
                    <div class="margin-top-11"></div>
                    <div class="group.item_separator--bottom"></div>
                </div>
            </div>
        </div>
    </div>
</section>





