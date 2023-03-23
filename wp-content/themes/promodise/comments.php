<div class="comments my-4">

    <?php
    if (have_comments()): ?>

    <h3 class="mb-5">Комментарии:</h3>
        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'walker'            => new Promodise_Walker_Comment(),
                    'max_depth'         => 2,
                    'style'             => 'ol',
                    'callback'          => null,
                    'end-callback'      => null,
                    'type'              => 'all',
                    'reply_text'        => 'Ответить <i class="fa fa-reply"></i>',
                    'page'              => '',
                    'per_page'          => 10,
                    'avatar_size'       => 80,
                    'reverse_top_level' => null,
                    'reverse_children'  => '',
                    'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
                    'short_ping'        => false,    // С версии 3.6,
                    'echo'              => true,     // true или false
                )
            );?>
        </ol>
    <?php the_comments_navigation(); // навигация по комментариям, если их много
        if (!comments_open()) :    ?>
        <p> Коментарии закрыты </p>
        <?php endif; ?>
    <?php endif; ?>
    <?php
    $defaults = [
        'comment_field' => '<div class="row">
                                <div class="col-lg-12 mb-3">
		                            <textarea id="comment" name="comment" cols="30" rows="6" class="form-control" placeholder="Комментарий*" required="required"></textarea>
	                            </div>
	                        </div>',
        'comment_notes_before' => '<p class="comment-notes">
		                                <span id="email-notes">' . __( 'Ваш электронный адрес не будет опубликован.' ) . '</span>'.'
        	                            <span class="required-field-message" aria-hidden="true">Обязательные поля для заполнени помечены<span class="required" aria-hidden="true">*</span></span>
                                  </p>',
        'fields' => array(
            'author'=> '<div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input id="author" name="author" type="text" class="form-control" placeholder="Имя*" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"/>
                                </div>
                            </div>',
            'email'=> '<div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email*" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"/>
                                </div>
                            </div>
                        </div>',
            'cookies' => '<p class="comment-form-cookies-consent">'.
			                    '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
			                    <label for="wp-comment-cookies-consent">'. __( 'Сохраните мое имя и адрес электронной почты в этом браузере для следующего комментария.' ) .'</label>
		                   </p>',
        ),
            'logged_in_as' => '<p class="logged-in-as">' .
                            sprintf( __( '<a href="%1$s" aria-label="Вы вошли как %2$s. Редактировать профайл.">Вы вошли как %2$s</a>. <a href="%3$s">Выйти?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post->ID ) ) ) ) . '
	                        </p>',
            'must_log_in' => '<p class="must-log-in">' .
            sprintf( __( 'Вы должны <a href="%s">быть зарегестрированы</a> чтоб бы оставить коментарии.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post->id ) ) ) ) . '
	 </p>',
        'comment_notes_after'  => '',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_container'      => 'comment-respond',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit',
        'name_submit'          => 'submit',
        'title_reply'          => __( 'Оставьте комментарий' ),
        'title_reply_to'       => __( 'Оставьте комментарий к %s' ),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => ' <small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Отминить коментарий' ),
        'label_submit'         => __( 'Оставить комментарий' ),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-hero btn-circled" value="%4$s" />',
        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
        'format'               => 'xhtml',
    ];

    comment_form( $defaults );


  ?>
</div>
