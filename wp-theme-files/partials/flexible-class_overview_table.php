<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * bordered table with title and 2 columns
 */
?>

<section class="container">
  <div class="class-overview">
    <div class="table-responsive">
      <table class="table">
        <caption><?php echo esc_html(get_sub_field('table_title')); ?></caption>
        <tbody>
          <?php 
            if(have_rows('table_content')){
              while(have_rows('table_content')){
                the_row();
                echo '<tr><th scope="row">' . esc_html(get_sub_field('table_row_title')) . '</th>';
                echo '<td>' . esc_html(get_sub_field('table_row_content')) . '</td></tr>';
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>