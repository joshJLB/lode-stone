<?php
$repeater = $instance['card_repeater'];
$title = $instance['title'];
$imageID = $instance['image'];
$imageURL = wp_get_attachment_url($imageID);
?>
<div class="card-demo-container" style="background-image: url(<?=$imageURL;?>);">
    <div class="overlay"></div>
    <h2><?=$title;?></h2>
    <div class="cards-inner">
        <?php foreach($repeater as $index => $slide){
            $cardTitle = $slide['card_title'];
            $cardBody = $slide['card_body'];
            $linkText = $slide['card_link_text'];
            $link = $slide['card_link'];
            $cardImageID = $slide['card_image'];
            $cardImageURL = wp_get_attachment_url($cardImageID);
        ?>
            <div class="single-card">
                <img src="<?=$cardImageURL;?>" alt="">
                <h3><?=$cardTitle;?></h3>
                <p class="card-demo-content"><?=$cardBody;?></p>
                <a href="<?=$link;?>"><?=$linkText;?> ></a>
            </div>
        <?php }; ?>
    </div>
</div>