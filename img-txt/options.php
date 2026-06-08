<?php
/* @var $options array It contains all the options of the current block, but usually there is no need to access it directly */
/* @var $fields NewsletterFields */

/**
 * This is a simple options panel for a Newsletter Composer Block.
 * $fields contains many useful methods to create controls in a easy way.
 */
?>

<?php $fields->media('image', 'Image') ?>

<?php $fields->text('title', 'Title') ?>

<?php $fields->font('title_font', 'Title font', ['family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>

<?php $fields->textarea('text', 'Text') ?>

<?php $fields->font('text_font', 'Text font', ['align' => true, 'family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>


<?php 
// Always add that at the bottom: it generates a set of options automatically processed by Newsletter 
?>
<?php $fields->block_commons() ?>



