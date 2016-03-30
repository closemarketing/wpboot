<div id="single-author" class="panel panel-default">
    <div class="panel-body">
    <div id="author-image" class="col-sm-2 widgettitle">
        <?php echo get_avatar( get_the_author_meta('user_email'), '120', '' ); ?>
    </div><!-- author-image -->
    <div id="author-bio" class="col-sm-10">
        <h3 class="heading"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h3>
        <p><?php the_author_meta('description'); ?></p>

        <ul id="author-social" class="nav nav-pills">
            <li>
                <a href="https://twitter.com/<?php the_author_meta('twitter'); ?>">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="<?php the_author_meta('googleplus'); ?>">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="<?php the_author_meta('url'); ?>">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
    </div><!-- author-bio -->
    </div>
</div><!-- /single-author -->
