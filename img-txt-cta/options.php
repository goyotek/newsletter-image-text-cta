<?php
/* @var $options array It contains all the options of the current block, but usually there is no need to access it directly */
/* @var $fields NewsletterFields */

/**
 * This is a simple options panel for a Newsletter Composer Block.
 * $fields contains many useful methods to create controls in a easy way.
 */
?>

<?php $fields->text('title', 'Title') ?>

<?php $fields->number('title_padding_top', 'Title Padding Top (px)', ['default' => 0]) ?>
<?php $fields->number('title_padding_bottom', 'Title Padding Bottom (px)', ['default' => 20]) ?>

<?php $fields->textarea('text', 'Text') ?>

<?php $fields->number('text_padding_top', 'Text Padding Top (px)', ['default' => 0]) ?>
<?php $fields->number('text_padding_bottom', 'Text Padding Bottom (px)', ['default' => 20]) ?>

<?php $fields->media('image', 'Image') ?>

<?php $fields->text('button_text', 'Button Text') ?>

<?php $fields->url('button_link', 'Button Link') ?>

<?php $fields->color('button_background', 'Button Background Color') ?>

<?php $fields->color('button_color', 'Button Text Color') ?>

<?php $fields->number('button_padding_vertical', 'Button Padding Vertical (px)', ['default' => 10]) ?>

<?php $fields->number('button_padding_horizontal', 'Button Padding Horizontal (px)', ['default' => 25]) ?>

<?php $fields->font('button_font', 'Button Font', ['family_default' => true, 'size_default' => true, 'weight_default' => true, 'color_default' => false]) ?>

<?php 
// Two font selector, see the block.php on how to use them with the default newsletter values and inline style 
// For compatibility reasons the "default" option for family, size and weight selectors should be explicitely enabled
?>
<?php $fields->font('title_font', 'Title font', ['family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>
<?php $fields->font('text_font', 'Text font', ['family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>

<?php 
// Always add that at the bottom: it generates a set of options automatically processed by Newsletter 
?>
<?php $fields->block_commons() ?>



