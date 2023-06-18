<div class="width-24 device-height-24@desktop display-flex@desktop">
    <div class="width-12@desktop display-flex align-items-center justify-content-center height-24@desktop wave flex-direction-column">
        <div class="width-17 display-flex align-items-center justify-content-center">
            <?php snippet('index-svg'); ?>
        </div>
    </div>
    <div class="width-12@desktop height-24@desktop background-color-primary-extra-light display-flex align-items-center justify-content-center flex-direction-column">
        <div class="width-17">
            <?php snippet('logo'); ?>
            <div class="text-21 text-effect-super-bold font-weight-bold margin-top-7">Hello, there!</div>
            <div class="text-4 font-weight-300 color-bored-gray margin-top-2">To continue, please provide App Key and Product ID</div>
            <div class="margin-top-14">
                <?php component('LoginForm'); ?>
            </div>
            <div class="margin-top-17"></div>
            <div class="width-24 group.item_separator--bottom"></div>
            <ul class="margin-top-11 display-flex align-items-center flex-direction-row-reverse">
                <li class="margin-left-8 label color-label-gray">(c) 2023</li>
                <li class="margin-left-8 label color-label-gray">•</li>
                <li class="margin-left-8 label color-label-gray">Privacy</li>
                <li class="margin-left-8 label color-label-gray">•</li>
                <li class="margin-left-8 label color-label-gray">Terms of Service</li>
            </ul>
        </div>
    </div>
</div>

<style>
    .wave {
        background: linear-gradient(315deg, rgba(248,233,255,1) 0%, rgba(243,255,238,1) 27%, rgba(251,241,255,1) 42%, rgba(244,254,255,1) 54%, rgba(255,255,255,1) 98%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        background-attachment: fixed;
    }
    @keyframes gradient {
        0% {
            background-position: 0% 0%;
        }
        50% {
            background-position: 100% 100%;
        }
        100% {
            background-position: 0% 0%;
        }
    }
</style>