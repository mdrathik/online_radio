$(document).ready(function () {

    //Here is default button icon set and streaming link
    var first_img = 'url(./asset/images/play.png)';
    var second_image = 'url(./asset/images/pause.png)';
    var url = 'test.mp3';
    $('#btnplay').css('background-image', first_img);
    
    
    
    
    
    var audio = new Audio(url);                                  //Initializing Audio function with url parameter

if (readCookie('state') == 2) {
        audio.play();
        $('#btnplay').css('background-image', second_image);

    }
    else if (readCookie('state') == null) {
            audio.play();
            $('#btnplay').css('background-image', second_image);

        }

                                                                //Check Cookie state2 and play audio
    
      function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    } 
    
    
     $('#btnplay').click(function () {                          //click on play button to play and pause

        if (audio.paused == false) {                            //click to pause and change cookie=false3 with icon
            document.cookie = "state=3";
            audio.pause();
            /*alert(readCookie('state'));*/
            $(this).css('background-image', first_img);
            $(this).removeClass('pulse-button');
            $(this).addClass('pulse-disbutton');
        }

        else {                                                   //click on pause button to play and pause
            document.cookie = "state=2";
                                                                //click to play and change cookie=true2 with icon
            audio.play();
            $(this).css('background-image', second_image);
            $(this).addClass('pulse-button');

        }
    });
    
    
    document.addEventListener('play', function (e) {

        document.cookie = "state=3";
        audio.pause();
        /!*alert(readCookie('state'));*!/
        $('#btnplay').css('background-image', first_img);
        $('#btnplay').removeClass('pulse-button');
        $('#btnplay').addClass('pulse-disbutton');

        var audios = document.getElementsByTagName('audio');
        for (var i = 0, len = audios.length; i < len; i++) {
            if (audios[i] != e.target) {
                audios[i].pause();
            }
        }
    }, true);


    
    
    
});