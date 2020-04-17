<?php
$sMetadataVersion = '2.0';
$aModule = array(
    'id'          => 'zwb_better_image_resize',
    'title'       => 'Zunderweb better image resize',
    'description' =>  array(
        'de'=>'Bilder auf vorgegebenes Seitenverh&auml;ltnis skalieren.<br><br>
            Aktivierung: f&uuml;gen Sie der Datei modules/functions.php folgenden Code hinzu:<br>
            <code class="language-php" style="white-space: pre;">
if (!function_exists("includeImageUtils")) {
    function includeImageUtils()
    {
        include_once __DIR__ . "/zunderweb/better_image_resize/core/utils/oxpicgenerator.php";
    }
}
            </code><br>
            und aktivieren Sie das Modul.
        ',
        'en'=>'Resize images to given ratio<br><br>
            Activation: add the following code to modules/functions.php:<br>
            <code class="language-php" style="white-space: pre;">
if (!function_exists("includeImageUtils")) {
    function includeImageUtils()
    {
        include_once __DIR__ . "/zunderweb/better_image_resize/core/utils/oxpicgenerator.php";
    }
}
            </code><br>
            and activate the module.
        ',
    ),
    'version'     => '1.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'controllers'    => array(
    ),
    'events'       => array(
        'onActivate'   => '\zunderweb\better_image_resize\core\events::onActivate',
        'onDeactivate' => '\zunderweb\better_image_resize\core\events::onDeactivate'
    ),
    'blocks' => array(
    ),
    'templates' => array(
    ),
    'settings' => array(
    ),
);
