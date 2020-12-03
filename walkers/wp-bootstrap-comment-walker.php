<?php
/*
* Plugin Name: WP Bootstrap Comment Walker
* Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-comment-walker
* Version: 2.0.5
* Description: A WordPress class to format WordPress Comments to Twitter Bootstrap.
* Author: WP-Bootstrap
* Author URI: https://github.com/wp-bootstrap
* GitHub Plugin URI: https://github.com/wp-bootstrap/wp-bootstrap-comment-walker
* GitHub Branch: master
* License: GPL-3.0+
* License URI: http://www.gnu.org/licenses/gpl-3.0.txt
*/

class Bootstrap_Comment_Walker extends Walker_Comment {
    /**
     * Output a comment in the HTML5 format.
     *
     * @access protected
     * @since 1.0.0
     *
     * @see wp_list_comments()
     *
     * @param object $comment Comment to display.
     * @param int    $depth   Depth of comment.
     * @param array  $args    An array of arguments.
     */
    protected function html5_comment( $comment, $depth, $args ) {
        $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
        ?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent my-4 rounded shadow-lg bg-transparent' : 'd-block bg-transparent parent my-4 '); ?>>

            <div class="d-flex bg-dark rounded py-3 px-3">

                <?php if ( 0 != $args['avatar_size'] ): ?>
                    <div class="media-left">
                        <a href="<?php echo get_comment_author_url(); ?>" class="media-object">
                            <?php echo get_avatar( $comment, $args['avatar_size'], '', '', ['class' => 'rounded-circle'] ); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="w-100 ml-2">
                    <div class="d-flex align-items-center">
                        <?php printf( '<h3 class="media-heading text-white font-weight-bold text-capitalize">%s</h3>',  get_comment_author() ); ?>

                        <div class="comment-metadata pl-2 pb-2">
                            <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>" class="text-muted">
                                <time datetime="<?php comment_time( 'c' ); ?>">
                                    <?php printf( _x( 'le %1$s', '1: date' ), get_comment_date() ); ?>
                                </time>
                            </a>
                        </div>
                    </div>

                    <div class="media-body">


                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation label label-info"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
                        <?php endif; ?>

                        <div class="comment-content text-muted text-light" style="font-size: 14px">
                            <?php comment_text(); ?>
                        </div>

                    </div>
                </div>

                <div>

                    <div class="d-flex">
                        <a class="btn btn-warning rounded btn-sm mx-2" href="<?= get_edit_comment_link() ?>">modifié</a>
                        <a class="btn btn-info rounded btn-sm" href="<?= get_comment_reply_link() ?>">répondre</a>
                    </div>
                </div>

            </div>

        <?php
    }
}

?>
