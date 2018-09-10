<?php 
    $image = wp_get_attachment_url($instance['left_image']);
    $icon = wp_get_attachment_url($instance['icon_image']);
    $title = $instance['left_title'];
    $content = $instance['left_content'];
    $linkText = $instance['left_link_text'];
    $link = $instance['left_link'];
?>

<div class="angle-container">
    <div class="angle-image" style="background-image: url(<?=$image;?>);"></div>
    <div class="angle-content">
        <img src="<?=$icon;?>" alt="">
        <h2><?=$title;?></h2>
        <p><?=$content;?></p>
        <a href="<?=$link;?>"><?=$linkText;?> >></a>
    </div>
</div>