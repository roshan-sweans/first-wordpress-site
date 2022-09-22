$(document).ready(function () {
    $('#banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:700,
    })
    $('#gallery').owlCarousel({
        loop: true,
        margin: 27,
        nav: false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:700,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('.forms').submit(function (e) {
        e.preventDefault();
        var name = $('#first_name').val();
        var email = $('#email').val();
        var number = $('#phone').val();
        var lname = $('#last_name').val();
        var message = $('#comments').val();
        $('.nmsg,.pmsg,.emsg,.smsg,.mmsg').hide();
        if (name.length < 3) {
            $('.nmsg').show();
            $('.nmsg').text("Your name should be between 3 and 20 characters")
        }
        if (number.length < 9) {

            $('.pmsg').show();
            $('.pmsg').text("Phone number should be 10 digits long")

        }
        if (isNaN(number)) {

            $('.pmsg').show();
            $('.pmsg').text("Please enter a valid Phone number")

        }
        if (email.length < 3) {
            $('.emsg').show();
            $('.emsg').text("Enter a valid email ID(example:abc@xyz.com)")
        }
        else {
            var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var validEmail = regEx.test(email);
            if (!validEmail) {
                $('.emsg').show();
                $('.emsg').text("Enter a valid email ID(example:abc@xyz.com)")
            }
        }
        if (lname.length < 1) {
            $('.smsg').show();
            $('.smsg').text("Please enter your last name");
        }
        if (message.length < 10) {
            $('.mmsg').show();
            $('.mmsg').text("Your message should be atleast 10 characters long")
        }
    })
    $('.ab1,.ab2,.ab3').hide();
    $('.ahed1').click(function () {
        $('.p1').toggleClass('rotate-90')
        $('.ahed1').toggleClass('ahed')
        $('.ab1').slideToggle()
    })
    $('.ahed2').click(function () {
        $('.p2').toggleClass('rotate-90')
        $('.ahed2').toggleClass('ahed')
        $('.ab2').slideToggle()
    })
    $('.ahed3').click(function () {
        $('.p3').toggleClass('rotate-90')
        $('.ahed3').toggleClass('ahed')
        $('.ab3').slideToggle()
    })
    const prevIcon = '<img src="../images/arrow.png" class="arrow" alt="left">';
    const nextIcon = '<img src="../images/arrow.png" class="rt180 arrow" alt=right">';
    $('#footslide').owlCarousel({

        loop: true,
        margin: 3,
        dots: false,
        nav: true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplaySpeed:700,
        navText: ['<img src="../images/arrow.png" class="arrow aleft" alt="left"></img>', '<img src="../images/arrow.png" class="rt180 arrow aright" alt=right">'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }

    })


});
