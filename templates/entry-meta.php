<?php
    $categories_list = get_the_category_list( ', ' );
    $tag_list = get_the_tag_list( '', ', ' );
?>

<dl>
    <dt>Published:</dt>
    <dd>
        <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
    </dd>

    <?php if($categories_list): ?>
        <dt>Categories:</dt>
        <dd><?php echo $categories_list; ?></dd>
    <?php endif; ?>

    <?php if($tag_list): ?>
        <dt>Tags:</dt>
        <dd><?php echo $tag_list; ?></dd>
    <?php endif; ?>
</dl>