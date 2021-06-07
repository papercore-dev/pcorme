<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php
include 'header_en.php'
?>
<div class="flex justify-left px-4 md:ml-40 md:px-6 lg:px-8 mt-20 mb-20">
  <div>
    <div class="w-full ml-auto mr-auto mb-6 "><h1 class=" text-4xl font-bold bg-gradient-to-r from-green-400 to-blue-500 text-white px-2 py-2 ">Shorten Links. No fees attached.</h1><br>Pcor.me is free forever as it's your domain.</div>
    <div class="w-full flex border border-gray-200 rounded-full p-4 shadow text-xl">
    <form method="post" action="shorten.php" id="shortener">
      <input type="text" name="longurl" id="longurl" class="w-full outline-none px-3">
    </div>
    <div class="mt-8">
      <button class="mr-3 bg-gray-200 border border-gray-300 py-3 px-4 rounded hover:bg-gray-400 hover:border-gray-500" type="submit">Shorten URL</button>
    </div>
  </div>
</div>
	</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#shortener').submit(function () {
					$.ajax({data: {url: $('#longurl').val()}, url: '/shortapi.php', complete: function (XMLHttpRequest, textStatus) {
						$('#longurl').val(XMLHttpRequest.responseText);
					}});
					return false;
				});
			});
		</script>
<h1 class=" text-4xl font-semibold px-2 py-2 text-center">Get more with shortened URL.</h1>
<div class=" flex flex-wrap items-center justify-center">
    
    <div class="w-1/2 flex-shrink-0 m-6 relative overflow-hidden bg-indigo-500 rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <img class="relative w-16" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/sparkles_2728.png" alt="">
      </div>
      <div class="relative text-white px-6 pb-6 mt-6">
        <div class="text-center justify-between">
          <span class="block font-semibold text-xl">1. Shorten URL</span>
          <p>Your URL will have cool magic.</p>
         </div>
      </div>
    </div>
    <div class="w-1/2 flex-shrink-0 m-6 relative overflow-hidden bg-blue-500 rounded-lg max-w-xs shadow-lg">
      <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
      </svg>
      <div class="relative pt-10 px-10 flex items-center justify-center">
        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
        <img class="relative w-16" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/chart-increasing_1f4c8.png" alt="">
      </div>

      <div class="relative text-white px-6 pb-6 mt-6">
        <div class="text-center justify-between">
          <span class="block font-semibold text-xl">2. Increase views</span>
          <p>Shortened URLs will be more visited.</p>
         </div>
      </div>
    </div>
  </div>
  <h1 class="mt-8 text-4xl font-semibold px-2 py-2 text-center">Worldwide trustes you.<br>Seems difficult? Just shorten it.</h1>
<center>  <button class="font-bold text-xl font-mono rounded px-3 py-2 m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
   Shorten Now
</button> </center>
 <?php
include 'footer_en.php'
?>
</body>
</html>
