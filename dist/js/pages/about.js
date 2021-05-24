var see = false;

let target = [];

$(document).ready(function(){
    var classTarget = document.getElementsByClassName('textTarget');
    for(var i = 0; i<classTarget.length;  i++){
        target[i] = classTarget[i];
    }
})

function SeeMore(idiom){
    $('#btn-more').contents().remove();
    if(see == false){
        
        $('#story-expand').slideDown();
        see = true;
        if(idiom == 'SEE MORE'){
            $('#btn-more').append('HIDDEN')
        } else {
            $('#btn-more').append('OCULTAR')
        }

    } else {

        $('#story-expand').slideUp();
        see = false;
        if(idiom == 'SEE MORE'){
            $('#btn-more').append('SEE MORE')
        } else {
            $('#btn-more').append('VER MÁS')
        }

    }
}


$(window).scroll(function() {
    for(var i = 0; i<target.length; i++){
        $('#target_'+i).css({'transform': 'scale('+0+'.'+window.scrollY+')'});
    }
});

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        width: '100%',
        height: '100%',
        videoId: 'DpLqgFFdJNY',
        playerVars: {'playsinline': 1,  'loop' : 1,'controls': 0, 'showinfo': 0  },
    });
}
