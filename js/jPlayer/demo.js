$(document).ready(function(){

  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  },{
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: false
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });
$(document).ready(function(){
     $("body").on("click", ".play", function() {
                $("#jplayer_N").jPlayer("clearMedia");
                var id = $(this).attr("id");
                    $("#jplayer_N").jPlayer("setMedia", {
                      mp3:"/vip/assets/sample/songs/"+id,
                      title:id,
                      artist:"Arijit Singh",
                    }).jPlayer("play");
            });
            $("body").on("click", ".video_description", function() {
                 $.ajax({
                        type: "POST",
                        url: base_url+"vip/videodescription/",
                        success: function(data) {
                            $("#bjax-target").html(data);
                            NProgress.done(true);
                        }
                    });  
            });
});
   

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });



  // video

  $("#jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        title: "Big Buck Bunny",
        m4v: "/vip/assets/video/big_buck_bunny_trailer.m4v",
        ogv: "/vip/ssets/video/big_buck_bunny_trailer.ogv",
        webmv: "/vip/assets/video/big_buck_bunny_trailer.webm",
        poster: "/vip/images/m41.jpg"
      });
    },
    swfPath: "js",
    supplied: "webmv, ogv, m4v",
    size: {
      width: "100%",
      height: "auto",
      cssClass: "jp-video-360p"
    },
    globalVolume: true,
    smoothPlayBar: true,
    keyEnabled: true
  });

});