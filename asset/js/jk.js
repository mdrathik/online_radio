$(document).ready(function () {

    //Here is default button icon set and streaming link
    var first_img = 'url(./asset/images/play.png)';
    var second_image = 'url(./asset/images/pause.png)';
    var url = 'http://stream.nolive.com/8wv4d8g4344tv';
    $('#btnplay').css('background-image', first_img);


    var audio = new Audio(url);                                  //Initializing Audio function with url parameter


                                                                //Check Cookie state2 and play audio
    if (readCookie('state') == 2) {
        audio.play();
        $('#btnplay').css('background-image', second_image);

    }
    else if (readCookie('state') == null) {
            audio.play();
            $('#btnplay').css('background-image', second_image);

        }



    $('#btnplay').click(function () {                          //click on play button to play and pause

        if (audio.paused == false) {                            //click to pause and change cookie=false3 with icon
  
            audio.pause();
            /*alert(readCookie('state'));*/
            $(this).css('background-image', first_img);
            $(this).removeClass('pulse-button');
            $(this).addClass('pulse-disbutton');
        }

        else {                                                   //click on pause button to play and pause
     
                                                                //click to play and change cookie=true2 with icon
            audio.play();
            $(this).css('background-image', second_image);
            $(this).addClass('pulse-button');

        }
    });


 /*-----------------------------by this function find cookie value whatever u want --------------------------------------*/

  /*  function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
*/
/*-----------------------------------------------------------------------------------------------*/
    /*   $("audio[id='audio']").on("click", function(){
     document.cookie = "state=3";
     audio.pause();
     /!*alert(readCookie('state'));*!/
     $('#btnplay').css('background-image', first_img);
     $('#btnplay').removeClass('pulse-button');
     $('#btnplay').addClass('pulse-disbutton');

     });*/



 /*-----------------------------by this event handler stop others playing multiple music  ---------------------------*/

    document.addEventListener('play', function (e) {

   
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



