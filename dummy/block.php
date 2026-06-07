<?php
/*
 * Name: Dummy
 * Section: content
 * Description: A dummy block to learn how to code them
 */

/* @var $options array */

// On future releases of Newsletter, default options will be part of the options.php
// file, it is the best place to have them. By now, be patience.

// The "block_*" options are reserved and could be processed dutrectly by Newsletter. For example the
// "block_background" and "block_padding_*" are used to generated the wrapper of the block content.

$default_options = array(
    'title' => 'Your stunning title',
    'text' => 'Your nice text to describe whatever you want to describe.',

    'block_padding_left' => 15,
    'block_padding_right' => 15,
    'block_padding_top' => 15,
    'block_padding_bottom' => 15,
    'block_background' => '', // Leave empty to use the block background set on the newsletter settings
);

$options = array_merge($default_options, $options);

// Image preparation (again, that is a bit tricky...)

$media = null;
if (!empty($options['image']['id'])) {
    // The $media is an onject containing the image URL and the size to specify in the HTML tag. The image is resized at
    // 2x to be sharp on mobile devices.
    $media = tnp_resize_2x($options['image']['id'], [$composer['width'], 0]);
    // Should never happen but... it happens
    if (!$media) {
        // Do something...
    }
}

// $options is processed with the wp_kses(...) so there is no need to escape it and that
// allow a richer content with safe HTML tags.

?>

<?php
// Here we define a single block style with classes that are then transoformed in inline styles. Style for fonts can be easily generated with
// the object created above. The style block is REMOVED on rendering.
?>
<style>
    .text {
        padding: 10px 15px 10px 15px;
    }
</style>

<?php
// The attribute "inline-class" is then replaced with a "style" attribute with all rules of the referenced class. 
?>

<h1><?php echo $options['title']?></h1>

<?php
// This methos deal with CSS, attributes, link and so on. 
?>

<?php if ($media) echo TNP_Composer::image($media) ?>

<p inline-class="text"><?php echo $options['text']?></p>
