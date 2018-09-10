<?php
$repeater = $instance['team_repeater'];
$title = $instance['section_title'];
$description = $instance['section_description'];
?>
<div class="card-container">
    <h2><?=$title;?></h2>
    <p class="card-description"><?=$description;?></p>
    <div class="team-members-container">
        <?php foreach($repeater as $index => $slide){
            $cardTitle = $slide['title'];
            $cardPosition = $slide['position'];
            $employeeDescription = $slide['employee_description'];
            $linkText = $slide['link_text'];
            $link = $slide['link'];
            $imageID = $slide['image'];
            $imageURL = wp_get_attachment_url($imageID);
        ?>
            <div class="team-member">
                <div class="team-member-inner">
                    <div class="team-image-container" style="background-image: url(<?=$imageURL;?>)">
                        <div class="overlay3"></div>
                        <p><?=$employeeDescription;?></p>
                    </div>
                    <h3><?=$cardTitle;?></h3>
                    <h4><?=$cardPosition;?></h4>
                    <a href="<?=$link;?>"><?=$linkText;?> ></a>
                </div>
            </div>
        <?php }; ?>
    </div>
</div>