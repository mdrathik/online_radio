$(document).ready(function () {

    var first_img = 'url(http://www.thelonelydodo.com/img/TLD%20play%20button.png)';
    var second_image = 'url(./asset/images/pause.png)';

    var url = 'http://119.148.23.88:101/;stream/1';
    var audio = new Audio(url);
    audio.play();

    $('#btnplay').css('background-image', second_image);

    $('#btnplay').click(function () {
        if (audio.paused == false) {
            audio.pause();
            $(this).css('background-image', first_img);
            $(this).removeClass('pulse-button');
            $(this).addClass('pulse-disbutton');
        } else {
            audio.play();
            $(this).css('background-image', second_image);
            $(this).addClass('pulse-button');

        }
    });

});



