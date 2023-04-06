depjdeiudo

<?php
if (! have_comments() ) {
    echo "leave a comment"
} else {
    echo get_comments_number() ." comments"; 
}


?>


<?php
wp_list_comments(
    array(
        'avatar_size' => 120,
        'style' => 'div',
        // 'short_ping' => true,
        // 'reply_text' => 'Reply',
    )
);
?>


<?php
 if(comments_open()){
    comment_form(
        array(
            'class_form' => '',
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h2>',
        )
    );
 }
?>