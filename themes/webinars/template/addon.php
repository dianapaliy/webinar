
<?php if (is_user_logged_in()){
//                                global $wpdb;
//                                $user_id = get_current_user_id();
//                                $post_id = get_the_ID();
//                                $query  = $wpdb->get_results("SELECT * FROM wp_subscribe WHERE user_id = $user_id AND post_id = $post_id");
//                                var_dump($query);
//                                if (!$query) {
    ?>
    <button type="submit" name="subscribe" id="subscribe">Subscribe</button>
    <input id="postId" type="hidden" value="<?php the_ID(); ?>" />
<?php
//                                }
}?>