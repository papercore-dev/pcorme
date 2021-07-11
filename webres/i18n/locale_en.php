<?php function lang($phrase){
    static $lang = array(
        // 01. PaperSpeed Engine Setup
        'WEBSITE_TITLE' => 'Pcor - URL Shortener',
        'WEBSITE_DESCRIPTION' => 'Generates very short URL!',
        'WEBSITE_URL' => 'https://pcor.me/',
        'WEBSITE_ICONPATH' => 'https://pcor.me/webres/img/',
        'TRANSLATORS' => 'PaperCore',
        // Nav Widget Setup
        'HEADER_BTN_PRIMARY' => 'Shorten new URL',
        'HEADER_SPINNER_01' => 'Show all',
        'HEADER_SPINNER_CHILD_01' => 'GitHub Source Code',
        'HEADER_SPINNER_CHILD_02' => 'PaperSpeed DNS',
        // Event Widget Setup
        'EVENT_TITLE' => '',
        'EVENT_LINKT' => '',
        'EVENT_LINKU' => '',
        // Locale (index.php)
        'PHP_INDEX_LOCALE_01' => '<span>Shorten</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-blue-500 to-purple-600 lg:inline">URLs.</span> <span>No strings attached.</span>',
        'PHP_INDEX_LOCALE_02' => 'Privacy-saving URL Shortener!',
        'PHP_INDEX_LOCALE_03' => '+',
        'PHP_INDEX_LOCALE_04' => 'Shortened address is <a class="font-bold" id="shortenedurl"></a>.'
    );
    return $lang[$phrase];
}
?>
