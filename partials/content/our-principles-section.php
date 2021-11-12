<section id="op" class="our-princinples-section flex-align flex-column" style="background: url('<?php the_field('principles_background'); ?>')no-repeat left fixed; -o-background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-size: cover;">
    <div class="our-princinples-section__inner">
        <div class="row flex-align flex-column">
            <div class="col col-12 child-text-center">
                <h2 class="white-text"><?php the_field('principles_heading'); ?></h2>
                <p class="white-text"><?php the_field('principles_sub_heading'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="priciple-list">
    <div class="priciple-inner container-horizontal">
        <ul>
            <li>
                <?php the_field('principles_list_1'); ?>
            </li>
            <li>
                <?php the_field('principles_list_2'); ?>
            </li>
            <li>
                <?php the_field('principles_list_3'); ?>
            </li>
            <br /><br /><br />
            <li style="margin-top:1.23rem">
                <?php the_field('principles_list_4'); ?>
            </li>
            <li>
                <?php the_field('principles_list_5'); ?>
            </li>
            <li>
                <?php the_field('principles_list_6'); ?>
            </li>
        </ul>


    </div>


</section>