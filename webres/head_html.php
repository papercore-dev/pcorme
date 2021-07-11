<?php $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);$acceptLang = ['ko', 'en'];$lang = in_array($lang, $acceptLang) ? $lang : 'en';require_once "webres/i18n/locale_{$lang}.php"; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" sizes="180.180" href="<?php echo lang('WEBSITE_ICONPATH');?>apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo lang('WEBSITE_ICONPATH');?>android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo lang('WEBSITE_ICONPATH');?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo lang('WEBSITE_ICONPATH');?>favicon-16x16.png">
<link rel="manifest" href="<?php echo lang('WEBSITE_ICONPATH');?>site.webmanifest">
<meta name="msapplication-TileColor" content="#1D4ED8">
<meta name="theme-color" content="#1D4ED8">
<title><?php echo lang('WEBSITE_TITLE');?></title>
<meta name="title" content="<?php echo lang('WEBSITE_TITLE');?>">
<meta name="description" content="<?php echo lang('WEBSITE_DESCRIPTION');?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo lang('WEBSITE_URL');?>">
<meta property="og:title" content="<?php echo lang('WEBSITE_TITLE');?>">
<meta property="og:description" content="<?php echo lang('WEBSITE_DESCRIPTION');?>">
<meta property="og:image" content="<?php echo lang('WEBSITE_ICONPATH');?>PCorMe_new.png">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo lang('WEBSITE_URL');?>">
<meta property="twitter:title" content="<?php echo lang('WEBSITE_TITLE');?>">
<meta property="twitter:description" content="<?php echo lang('WEBSITE_DESCRIPTION');?>">
<meta property="twitter:image" content="<?php echo lang('WEBSITE_ICONPATH');?>PCorMe_new.png">
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" rel="stylesheet">
<link href="//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet">
<style>html{font-family: 'Seoge UI Variable', 'Inter', 'Spoqa Han Sans', sans-serif;}</style>
<!-- PaperEngine 4.0 Dev.
Developer Notes: This version is very unstable.
TODO: MySQL to universialize & reuse components.
---
Translatable, storage-efficient website engine.
Translators of <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?> lang. code: <?php echo lang('TRANSLATORS');?>
-->