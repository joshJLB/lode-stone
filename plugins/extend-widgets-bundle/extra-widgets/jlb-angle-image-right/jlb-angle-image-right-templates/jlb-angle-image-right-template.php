<?php 
    $image = wp_get_attachment_url($instance['right_image']);
    $icon = wp_get_attachment_url($instance['icon_image']);
    $title = $instance['right_title'];
    $content = $instance['right_content'];
    $linkText = $instance['right_link_text'];
    $link = $instance['right_link'];
?>

<div class="angle-container">
    <div class="angle-content">
        <img src="<?=$icon;?>" alt="">
        <h2><?=$title;?></h2>
        <p><?=$content;?></p>
        <a href="<?=$link;?>"><?=$linkText;?> >></a>
    </div>
    <div class="angle-image-two" style="background-image: url(<?=$image;?>);"></div>
</div>