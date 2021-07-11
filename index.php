<?php
require './shorty.php';
require './config.php';

$shorty = new Shorty($hostname, $connection);

$shorty->set_chars($chars);
$shorty->set_salt($salt);
$shorty->set_padding($padding);

$shorty->run();
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<?php include 'webres/head_html.php';?>
  </head>
  <body>
<?php include 'webres/campaign_widget.php';?>
<?php include 'webres/nav_widget.php'?>
<section class="pt-24 pb-24 bg-white">
<div class="px-12 mx-auto max-w-7xl">
<div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
<h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
<?php echo lang('PHP_INDEX_LOCALE_01');?>
</h1>
<p class="px-0 mb-8 text-lg text-gray-600 md:text-xl lg:px-24"><?php echo lang('PHP_INDEX_LOCALE_02');?><br><br>
<form method="post" action="shorten.php" id="shortener" class="inline-flex">
<input required type="text" name="longurl" id="longurl" placeholder="https://" class="w-4/5 border-2 border-indigo-500 text-xl bg-gray-100 h-10 px-5 pr-10 rounded-md text-sm focus:outline-none text-black">

<button type="submit" class="flex justify-center bg-gradient-to-b from-indigo-500 to-indigo-600 text-gray-100 px-3 py-1 rounded-md tracking-wide font-semibold  focus:outline-none focus:shadow-outline  cursor-pointer transition ease-in duration-100">
<?php echo lang('PHP_INDEX_LOCALE_03');?>
</button>
</form>
<br>
<div class="mt-4 rounded-md w-2/3 text-center py-2 bg-indigo-200 inline-flex hidden" id="shortened">
  <span class="text-center w-full"><?php echo lang('PHP_INDEX_LOCALE_04');?></span>
</div>
</p>
<div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
</div>
</div>

</div>
<!-- Client-Side Shortener -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function () {
				$('#shortener').submit(function () {
					$.ajax({data: {url: $('#longurl').val()}, url: '/shortapi.php', complete: function (XMLHttpRequest, textStatus) {
						document.getElementById("shortened").classList.remove('hidden');
            document.getElementById("shortenedurl").href = XMLHttpRequest.responseText;
            document.getElementById("shortenedurl").innerHTML = XMLHttpRequest.responseText;
					}});
					return false;
				});
			});
		</script>
<!-- Client-Side Shortener End -->
</section>
<!--div class="container flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6 border-t">
<div class="flex flex-col items-center w-full md:flex-row md:w-1/2">
<div class="max-w-lg md:mx-12 md:order-2">
<h1 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white md:text-4xl">
인기 앱들의 <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline font-bold"> 광고 차단!</span></h1>
<p class="mt-4 text-gray-600 dark:text-gray-300">
광고들이 나를 추적하는 느낌, 점점 넘쳐나는 느낌 들지 않으세요?<br>
페이퍼 스피드 DNS와 함께라면 그런 걱정은 있을 수 없습니다. 지금 바로 무료로 연결하세요.
</p>

</div>
</div>
<div class="flex items-center justify-center w-full h-96 md:w-1/2">
<img class=" h-full max-w-2xl rounded-md" src="https://i.imgur.com/jinzOaO.png" alt="갤럭시 S21과 갤럭시 XCover 2">
</div>
</div>-->
 <?php include 'webres/btm_widget.php';?>
</body>
</html>
