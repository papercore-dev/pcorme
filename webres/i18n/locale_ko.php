<?php function lang($phrase){
    static $lang = array(
        // 01. PaperSpeed Engine Setup
        'WEBSITE_TITLE' => '피코르 - URL 단축기',
        'WEBSITE_DESCRIPTION' => '매우 짧은 URL 주소를 생성합니다!',
        'WEBSITE_URL' => 'https://pcor.me/',
        'WEBSITE_ICONPATH' => 'https://pcor.me/webres/img/',
        'TRANSLATORS' => 'PaperCore',
        // Nav Widget Setup
        'HEADER_BTN_PRIMARY' => '새 URL 줄이기',
        'HEADER_SPINNER_01' => '전체보기',
        'HEADER_SPINNER_CHILD_01' => 'GitHub 소스 코드',
        'HEADER_SPINNER_CHILD_02' => '페이퍼스피드 DNS',
        // Event Widget Setup
        'EVENT_TITLE' => '',
        'EVENT_LINKT' => '',
        'EVENT_LINKU' => '',
        // Locale (index.php)
        'PHP_INDEX_LOCALE_01' => '<span>URL을</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-blue-500 to-purple-600 lg:inline">무제한으로</span> <span>단축해드립니다.</span>',
        'PHP_INDEX_LOCALE_02' => '보는 이, 만드는 이 모두의 개인정보를 보호하는 나만의 URL 단축기!',
        'PHP_INDEX_LOCALE_03' => '생성',
        'PHP_INDEX_LOCALE_04' => '줄여진 주소는 <a class="font-bold" id="shortenedurl"></a>입니다.'
    );
    return $lang[$phrase];
}
?>
