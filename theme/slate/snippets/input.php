<?php 

$model = (isset($snippet['model'])) ? 'xmodel="'.$snippet['model'].'"' : '';
$type =  (isset($snippet['type'])) ? 'type="'.$snippet['type'].'"' : 'type="text"';
$size = $snippet['size'] ?? 'standard';
$placeholder =  (isset($snippet['placeholder'])) ? 'placeholder="'.$snippet['placeholder'].'"' : '';

?>

<fieldset class="fieldset__input padding-x-7 padding-y-9 text-4 font-weight-300 display-flex align-items-center border-radius-extra-small-5">
    <?php if (isset($snippet['label'])): ?>
        <label class="letter-spacing-7 margin-right-6"><?php echo $snippet['label']; ?></label>
    <?php endif; ?>
    <input <?php echo $type.' '.$model.' '.$placeholder; ?> class="border-style-none width-24">
</fieldset>