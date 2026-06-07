<?php
/* @var $options array It contains all the options of the current block, but usually there is no need to access it directly */
/* @var $fields NewsletterFields */

/**
 * This is a simple options panel for a Newsletter Composer Block.
 * $fields contains many useful methods to create controls in a easy way.
 */
?>

<?php $fields->text('title', 'Title') ?>

<?php $fields->textarea('text', 'Text') ?>

<?php $fields->media('image', 'Image') ?>

<?php 
// Always add that at the bottom: it generates a set of options automatically processed by Newsletter 
?>
<?php $fields->block_commons() ?>



