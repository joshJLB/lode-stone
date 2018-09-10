<?php
    $image = wp_get_attachment_url($instance['image']);
    $content = $instance['content'];
?>

<div class="call-to-action-container">
    <div class="call-to-action-inner" style="background-image: url(<?=$image;?>);">
        <p><?=$content;?></p>
    </div>
</div>