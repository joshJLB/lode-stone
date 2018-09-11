<?php 
    $title = $instance['title'];
    $main = $instance['main_content'];
    $leftText = $instance['left_textarea'];
    $rightText = $instance['right_textarea'];
?>

<div class="text-block-container">
    <h2><?=$title;?></h2>
    <?=$main;?>
    <div class="text-block-columns">
        <p class="column-one"><?=$leftText;?></p>
        <p class="column-two"><?=$rightText;?></p>
    </div>
</div>