<section xcomponent="@BuildVersion" class="width-24 build-declaration">
    <span class="text-1 font-weight-2 display-flex align-items-center justify-content-flex-end">
    <?php
        $date = new \DateTime("now",new \DateTimeZone("Asia/Manila"));
        echo 'Build v'.$date->format('Y.m.d.His');
     ?>
     </span>
</section>