<div class="tab-widget-two">
    <div class="tab-widget-two-container">
        <?php
            $widgetID  = $instance['panels_info']['id'];
            $tabs = $instance['tab_repeater'];
            $title = $instance['tab_title'];
            $count = 0; 
        ?>

        <h2><?=$title;?></h2>
        <ul class="nav nav-tabs" role="tablist">
        <?php foreach($tabs as $index => $tab) {
            $count++;
            $tabLink = $tab['tab_link']; 
        ?>
            <li class="nav-item">
                <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" data-toggle="tab" href="#tab-<?=$widgetID?>-<?php echo $count; ?>" role="tab">
                    <?php echo $tabLink; ?>
                </a>
            </li>
        <?php }; ?>
        </ul>
        <div class="tab-content">
            <?php
                $count2 = 0;
            foreach($tabs as $index => $tab) {
                $count2++;
                $content = $tab['tab_content'];
            ?>
            
            <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?=$widgetID?>-<?php echo $count2; ?>" role="tabpanel">
                    <div class="content-holder">
                        <?php echo $content; ?>
                    </div>
            </div>

            <?php }; ?>
        </div>
    </div>
</div>