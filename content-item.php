<p>商品名<?php the_title(); ?></p>
<?php $price = get_post_meta(get_the_ID(), 'price', true); ?>
<?php $publisher = get_post_meta(get_the_ID(), 'publisher', true); ?>
<?php $writer = get_post_meta(get_the_ID(), '著者', false); ?>
<!-- trueの場合は一つの文字列、　falseなら配列となる -->
<dl>
    <?php if ($price !== '') : ?>
        <dt>価格です</dt>
        <dd><?php echo esc_html(number_format($price)); ?>円</dd>
    <?php endif; ?>
    <?php if ($publisher !== '') : ?>
        <dt>出版社</dt>
        <dd><?php echo esc_html($publisher); ?></dd>
    <?php endif; ?>
    <?php if ($writer) : ?>
        <dt>著者</dt>
        <?php foreach ($writer as $w) : ?>
            <dd><?php echo esc_html($w); ?></dd>
        <?php endforeach; ?>
    <?php endif; ?>
</dl>
<?#php
// var_dump($price, $publisher, $writer);
