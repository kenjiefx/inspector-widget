<section xcomponent="@PageError" class="width-24">
    <div xif="state=='empty'" class="width-24">
    </div>
    <div xif="state=='error'" class="width-24">
        <div class="display-flex align-items-center">
            <?php snippet('svg',[
                'class' => 'small-width-7 color-elegant-black',
                'path' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />'
            ]); ?>
            <div class="text-7 margin-left-4">{{error.title}}</div>
        </div>
        <div class="margin-top-8 font-weight-300 color-bored-gray line-height-17">{{error.message}}</div>
    </div>
</section>

