<section xcomponent="@BuildVersion" class="width-24 position-fixed z-index-1 fixed-bottom-0">
    <span class="text-1 font-weight-200 display-flex align-items-center justify-content-flex-end">
    <?php
        $date = new \DateTime("now",new \DateTimeZone("Asia/Manila"));
        echo 'Build v'.$date->format('Y.m.d.His');
     ?>
     </span>
     <dialog xblock="@BuildCardDialog" class="group.dialog_standard">
        <div class="width-24 max-width-11 background-color-white box-shadow-card-standard border-radius-extra-small-5">
            <div class="padding-top-5"></div>
            <div class="padding-y-11 padding-x-11">
                <div class="text-7 font-weight-400 letter-spacing--2">Build Information</div>
                <div class="text-2 font-weight-300 color-bored-gray margin-top-5 line-height-13">This is a serverless application. We do not have our own servers to store your data.</div>
            </div>
            <div class="group.item_separator--bottom"></div>
            <div class="padding-y-11 padding-x-11">
                <div class="label letter-spacing-7 color-label-gray">Build Version</div>
                <div class="margin-top-2 text-2 font-weight-300"><?php echo 'Build v'.$date->format('Y.m.d.His'); ?></div>
                <div class="margin-top-4"></div>
                <div class="group.item_separator--bottom"></div>
                <div class="margin-top-4"></div>
                <div class="label letter-spacing-7 color-label-gray">App Version</div>
                <div class="margin-top-2 text-2 font-weight-300">v1.0.0</div>
            </div>
            <div class="display-flex align-items-center flex-direction-row-reverse padding-y-11 padding-x-11">
                <?php snippet('button',[
                    'click' => 'closeBuildVersionDialog()',
                    'type' => 'submit',
                    'text' => 'Close',
                    'color-type' => 'primary',
                    'color' => 'white'
                ]); ?>
            </div>
            <div class="padding-bottom-5"></div>
        </div>
     </dialog>
</section>