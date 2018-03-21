<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Footer para las páginas
*/
?>
	<footer class="container-fluid">
		
	</footer>

	<!-- Google -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-1700556-2', 'auto');
		ga('send', 'pageview');

	</script>


    <!-- jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<!-- Tweenmax -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>

	<script src="js/home.js"></script>
	<script async>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src='https://embed.playbuzz.com/sdk.js';fjs.parentNode.insertBefore(js,fjs);}(document,'script','playbuzz-sdk'));
	</script>
	<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var videos=['8No5Wy0mq84','hywyOQxb02g','dNEtlz6euZA','hywyOQxb02g','pgTfauagx6U','fLgVF59UFDM','hywyOQxb02g','Re7i-GkmZSI','hywyOQxb02g','PJ9lL5vCXZc','IMUleD78BjI','_4oouUxGzWA','V4hsb0TZUjA',
    'YjC6E6MBNVA','a7JaRGE7uz0','TGu1dqVpjsk','TpcYSuQq3Og'];
    players = new Array();


      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;

    function onYouTubeIframeAPIReady() {

        videos.forEach(function(idVideo, indice) {  
            player = new YT.Player('player'+indice, {
              height: '215',
              width: '560',
              playerVars:{
                'autoplay': 0,
                'controls': 0, 
                'autohide': 0,
                'showinfo' : 0, // <- This part here
                'wmode': 'opaque',
                'rel': 0,
                'loop': 0
              },
              videoId: idVideo,
              events: {
                'onReady': onPlayerReady
              }
            });
            players.push(player);
        });

      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.stopVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.

      function stopVideo(videoActual) {
        
        players.forEach(function(player){
            if(player.getVideoData()['video_id']==videoActual){
                player.stopVideo();
            }
        });

      }
    </script>

</body>
</html>