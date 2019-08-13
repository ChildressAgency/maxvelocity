<?php
/**
 * Import forums, topics, replies from cpt
 */
if(!defined('ABSPATH')){ exit; }

if(!class_exists('Maxvelocity_Import_Forums')){
  class Maxvelocity_Import_Forums{
    public function __construct(){
      $this->init();
    }

    public function init(){
      add_shortcode('maxvelocity_import_forums', array($this, 'process_shortcode'));
    }

    public function process_shortcode(){
      ob_start();

      if(isset($_POST['submit'])){
        $this->process_import();
        //echo '<h4>' . $import . '</h4>';
      }
      else{
        $this->show_upload_form();
      }

      return ob_get_clean();
    }

    private function show_upload_form($upload_error = null){
      ?>
      <form action="<?php echo esc_url(get_permalink()); ?>" method="post" enctype="multipart/form-data">
        <h3><?php echo esc_html__('Import forums', 'maxvelocity'); ?></h3>


        <?php $nonce = wp_create_nonce('import_forums'); ?>
        <input type="hidden" name="nonce" value="<?php echo $nonce; ?>" />

        <div class="from-group">
          <button type="submit" name="submit" class="btn btn-primary"><?php echo esc_html__('BEGIN', 'maxvelocity'); ?></button>
        </div>
      </form>
      <?php
    }

    private function process_import(){
      global $wpdb;

      $missing_forum_ids = array('42625','31590','32608','34548','26723','66166','61493');
      $count = count($missing_forum_ids);
      $placeholders = array_fill(0, $count, '%d');
      $missing_forums = implode(', ', $placeholders);

      $forums = $wpdb->get_results($wpdb->prepare("
        SELECT *
        FROM forum_export
        WHERE post_id IN($missing_forums)", $missing_forum_ids));

      if($forums){
        foreach($forums as $forum){
          $forum_original_id = $forum->post_id;
          $forum_new_id = $this->insert_forum_item($forum);

          if(!is_wp_error($forum_new_id)){
            $topics = $wpdb->get_results($wpdb->prepare("
              SELECT *
              FROM forum_export
              WHERE post_parent = %d
                AND post_type = %s", (int)$forum_original_id, 'topic'));

            if($topics){
              foreach($topics as $topic){
                $topic_original_id = $topic->post_id;
                $topic_new_id = $this->insert_forum_item($topic, $forum_new_id);

                if(!is_wp_error($topic_new_id)){
                  $replies = $wpdb->get_results($wpdb->prepare("
                    SELECT *
                    FROM forum_export
                    WHERE post_parent = %d
                      AND post_type = %s", (int)$topic_original_id, 'reply'));

                  if($replies){
                    foreach($replies as $reply){
                      $reply_new_id = $this->insert_forum_item($reply, $topic_new_id);

                      if(is_wp_error($reply_new_id)){
                        echo '<br />Error inserting replies: ' . $reply_new_id->get_error_message();
                      }
                    }
                  }
                }
                else{
                  echo '<br />Error inserting topics: ' . $topic_new_id->get_error_message();
                }
              }
            }
          }
          else{
            echo '<br />Error inserting forums: ' . $forum->post_id . ' - ' . $forum_new_id->get_error_message();
          }
        }//end foreach forums

        echo '<br />Import complete.';
      }
      else{
        echo '<br />Could not find any forums.';
      }
    }

    private function insert_forum_item($item, $item_parent_id = 0){
      if($item->post_type == 'forum'){
        $item_parent_id = $item->post_parent;
      }

      $item_author_id = $this->get_item_author_id($item->eh_user_email);

      $new_item_args = array(
        'post_type' => $item->post_type,
        'post_author' => $item_author_id,
        //'post_date' => date('Y-M-d h:i:s', strtotime($item->post_date)),
        //'post_date_gmt' => date('Y-M-d h:i:s', strtotime($item->post_date_gmt)),
        'post_date' => $item->post_date,
        'post_date_gmt' => $item->post_date_gmt,
        'post_content' => $item->post_content,
        'post_title' => $item->post_title,
        'post_status' => $item->post_status,
        'comment_status' => $item->comment_status,
        'ping_status' => $item->ping_status,
        'post_password' => $item->post_password,
        'post_name' => $item->post_name,
        'post_parent' => $item_parent_id,
        'guid' => $item->guid,
        'menu_order' => $item->menu_order,
        'post_mime_type' => $item->post_mime_type,
        'comment_count' => $item->comment_count,
      );

      $item_id = wp_insert_post($new_item_args, true);

      return $item_id;
    }

    private function get_item_author_id($author_email = null){
      if($author_email == null || $author_email == ''){
        //max user id = 129
        return 129;
      }
      else{
        $author = get_user_by('email', $author_email);
        return $author->ID;
      }
    }
  }//end class
}


//post_id,post_author,eh_user_email,eh_user_name,post_date,post_date_gmt,post_content,post_title,post_status,comment_status,ping_status,post_password,post_name,post_parent,guid,menu_order,post_type,post_mime_type,comment_count,post_alter_id,extra_field