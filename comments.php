<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count === 1) {
                echo 'One Comment';
            } else {
                echo $comment_count . ' Comments';
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    if (!comments_open() && get_comments_number()) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'itzone360'); ?></p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
