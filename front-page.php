<?php
/*
    Template Name: Front Page
*/
get_header();?>
    <div class="container">
    <div class="banner">
        <div>
            <div id="banner" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="banner_1">
                        <img src="../images/cover.jpg" alt="phot of a mini mansion">
                        <div class="heading">
                            <div>Lorem ipsum dolor sit amet
                                din contour lorem</div>
                            <button class="till" title="Press the button to contact us "> Contact Us</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner_1">
                        <img src="../images/cover.jpg" alt="phot of a mini mansion">
                        <div class="heading">
                            <div>Lorem ipsum dolor sit amet
                                din contour lorem</div>
                            <button class="till" title="Press the button to contact us "> Contact Us</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner_1">
                        <img src="../images/cover.jpg" alt="phot of a mini mansion">
                        <div class="heading">
                            <div>Lorem ipsum dolor sit amet
                                din contour lorem</div>
                            <button class="till" title="Press the button to contact us "> Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
    <div class="section_1" id="About">
        <div class="left">

            <img src="../images/Homepage (1).jpg" alt="Picture of a sub-urban house">

            <div class="plybtn">
                <div class="playbutton">
                    <div class="circle"></div>
                    <div class="triangle"></div>
                </div>
            </div>

        </div>
        <div class="right">
            <div>
                <?php
                //  the_field('home_main_heading');
                 the_title();
                 ?>
            </div>
            <p>
               <?php if (have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
                <?php endwhile; endif;?>
            </p>
            <div class="div"><button title="Press to Read more about the poject">Read more</button></div>
        </div>
    </div>
    <div class="rh" id="Gallery">
        Our Gallery
    </div>
    <div class="section_2">
        <div id="gallery" class="owl-carousel owl-theme">
            <div class="item">
                <img src="../images/img2.jpg" alt="photo of a sub-urban home">
            </div>
            <div class="item">
                <img src="../images/img 3.jpg" alt="Photo of a mini mansion">
            </div>
            <div class="item">
                <img src="../images/img 4.jpg" alt="Photo of a house">
            </div>
            <div class="item">
                <img src="../images/img 5.jpg" alt="Photo of a sub-urban house">
            </div>
            <div class="item">
                <img src="../images/img2.jpg" alt="photo of a sub-urban home">
            </div>
            <div class="item">
                <img src="../images/img 3.jpg" alt="Photo of a mini mansion">
            </div>
            <div class="item">
                <img src="../images/img 4.jpg" alt="Photo of a house">
            </div>
            <div class="item">
                <img src="../images/img 5.jpg" alt="Photo of a sub-urban house">
            </div>
            <div class="item">
                <img src="../images/img2.jpg" alt="photo of a sub-urban home">
            </div>
            <div class="item">
                <img src="../images/img 3.jpg" alt="Photo of a mini mansion">
            </div>
            <div class="item">
                <img src="../images/img 4.jpg" alt="Photo of a house">
            </div>
            <div class="item">
                <img src="../images/img 5.jpg" alt="Photo of a sub-urban house">
            </div>

        </div>
    </div>
    <div class="section_3">
        <div class="rh rh1" id="">
            Contact Us
        </div>
        <div class="forms">
            <form action="" method="post">
                <span class="nmsg"></span><span class="smsg"></span>
                <div class="up">
                    <input id="first_name" type="text" placeholder="FIRST NAME">
                    <input type="text" id="last_name" placeholder="LAST NAME">
                </div> <span class="emsg"></span><span class="pmsg"></span>
                <div class="down">
                    <input id="email" type="email" placeholder="EMAIL">
                    <input type="text" id="phone" placeholder="PHONE NO">
                </div><div class="mmsg"></div>
                <div class="comments">
                    <textarea rows="5" id="comments" placeholder="COMMENTS"></textarea></div>
                    <div class="btttn"><button id="send" title="Press to send  the comment">SEND</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="section_4">
        <div class="fq">FAQ</div>
        <div class="faq">
            <div class="set">
                <div class="aqh ahed1">
                    Lorem ipsum dolor sit amet din color
                   
                </div>
                <div class="plus p1">&nbsp;+&nbsp;</div>
                <div class="aqb ab1">
                    Fusce lorem nisl, suscipit quis dui ac, porta egestas tortor.
                    In posuere vulputate tellus, vel molestie nunc elementum quis. Ut in elementum tellus. Vestibulum
                    iaculis dignissim mauris, id rutrum urna blandit in. Mauris pulvinar tempus nunc, quis pellentesque
                    arcu ullamcorper et. Vivamus eget rhon-cus mi, sit amet cursus ipsum
                </div>
            </div>
            <div class="set">
                <div class="aqh ahed2">
                    Fusce lorem nisl, Ut in elementum tellus
                </div>
                <div class="plus p2">&nbsp;+&nbsp;</div>
                <div class="aqb ab2">
                    Fusce lorem nisl, suscipit quis dui ac, porta egestas tortor.
                    In posuere vulputate tellus, vel molestie nunc elementum quis. Ut in elementum tellus. Vestibulum
                    iaculis dignissim mauris, id rutrum urna blandit in. Mauris pulvinar tempus nunc, quis pellentesque
                    arcu ullamcorper et. Vivamus eget rhon-cus mi, sit amet cursus ipsum
                </div>
            </div>
            <div class="set">
                <div class="aqh ahed3">
                    Quite and peaceful location near the nature
                </div>
                <div class="plus p3">&nbsp;+&nbsp;</div>
                <div class="aqb ab3">
                    Fusce lorem nisl, suscipit quis dui ac, porta egestas tortor.
                    In posuere vulputate tellus, vel molestie nunc elementum quis. Ut in elementum tellus. Vestibulum
                    iaculis dignissim mauris, id rutrum urna blandit in. Mauris pulvinar tempus nunc, quis pellentesque
                    arcu ullamcorper et. Vivamus eget rhon-cus mi, sit amet cursus ipsum
                </div>
            </div>
        </div>
    </div>
   </div>  
<?php get_footer();?>