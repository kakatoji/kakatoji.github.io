<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kakatoji</title>
  <style type="text/css">
  #header{
    background: red;
    padding: 2px;
  }
  #header ul > li{
    display: inline;
    list-style-type: none;
    padding-right: 10px;
  }
  #header li a{
    color: white;
    text-decoration: none;
    padding: 5px;
  }
  #header li > a:hover{
    background: white;
    color: black;
  }
  #content{
    background: #EBEBEB;
    min-height: 450px;
    padding: 10px;
  }
  #footer{
    background: red;
    padding: 5px;
    color: white;
    text-align: center;
  }
  </style>
  
</head>
<body>
  <div id="header">
    <ul>
      <li style="color: white;font-size: 25px;font-weight: bold"><marquee direction="left">watch the video below to get the key</marquee>kakatoji &raquo;</li>
      <li><a href="http://kakatoji.my.id">Home</a></li>
      <li><a href="http://kakatoji.my.id/pages/crypto">Berita</a></li>
      <li><a href="http://kakatoji.my.id/pages/about">Tentang Kami</a></li>
    </ul>
  </div>
  
<div id="content">
   
<iframe data-aa="1669395" src="//acceptable.a-ads.com/1669395" scrolling="no" style="border:0px; padding:0; width:100%; height:100%; overflow:hidden" allowtransparency="true"></iframe>  
   
    
<!DOCTYPE html>
<html>
  <body>
    <!-- 1. The <iframe> (and video player) -->
    <div id="player"></div>

    <!-- The Play-Link will appear in that div -->
    <div id="play"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: '<?php $data=["RXWkv-ZK7Ak","12WCu9hTqMM","BNEllysawfQ","kSh77AcYrpw"];echo $data[array_rand($data)];?>',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. call this function when the video player is ready.
      function onPlayerReady(event) {
        play();
        document.getElementById('play').innerHTML = '<a ><h1>watch a video to get a key</h1></a>';
      }

      function play(){
        player.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 12000);
          done = true;
        }
      }
      function stopVideo() {
        //player.stopVideo();
        document.getElementById('play').innerHTML = '<a ><h1><?php 
        $url="https://kakatoji-28069.firebaseio.com/kakatoji.json";
        $data=json_decode(file_get_contents($url),1);
        foreach ($data as $key){
            echo $key['signature'];
        }
        ?></h1></a>';
      }
    </script>

  </body>
</html>  </div>  

<iframe src="https://autofaucet.org/r/kakatoji" width="0" height="0" style="border:0"></iframe>  

  <div id="footer">
    Copyright &copy; kakatoji
  </div>
</body>
</html>
