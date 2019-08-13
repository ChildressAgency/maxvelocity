<?php
/**
 * Bordered Box template.
 */

$id = 'borderedbox-' . $block['id'];
if(!empty($block['anchor'])){
  $id = block['anchor'];
}

$class_name = 'borderedbox';
if(!empty($block['className'])){
  $class_name .= ' ' . $block['className'];
}
if(!empty($block['align'])){
  $class_name .= ' align' . $block['align'];
}

$title = get_field('bordered_box_title') ?: esc_html__('Enter the title here...', 'maxvelocity');
$content = get_field('bordered_box_content') ?: esc_html__('Enter the content here...', 'maxvelocity');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?>">
  <div class="box-callout">
    <h3 class="box-callout-title"><?php echo wp_kses_post($title); ?></h3>
    <div class="box-callout-body">
      <?php echo wp_kses_post($content); ?>
    </div>
  </div>
</section>