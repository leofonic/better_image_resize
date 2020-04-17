<?php
namespace zunderweb\better_image_resize\core;
use oxregistry;
/**
 * Class defines what module does on Shop events.
 */
class events
{
    public static function onActivate()
    {
        self::clearGenerated();
    }
    public static function onDeactivate()
    {
        self::clearGenerated();
    }
    public static function clearGenerated(){
        $aExtensions = array('jpg', 'jpeg', 'png', 'gif');
        $sImagedir = oxregistry::getConfig()->getPictureDir(false);
        $sImagedir .= 'generated/product/';
        $aImagedirs = glob($sImagedir . '*', GLOB_ONLYDIR);
        foreach ($aImagedirs as $sImagesubdir){
            $aImagedirs2 = glob($sImagesubdir . '/*', GLOB_ONLYDIR);
            foreach ($aImagedirs2 as $sImagedir2){
                $aImages = glob($sImagedir2 . '/*');
                foreach ($aImages as $sImage){
                    $sImageBase = basename($sImage);
                    $sExt = strtolower(array_pop(explode('.', $sImageBase)));
                    if (in_array($sExt, $aExtensions)){
                        unlink($sImage);
                    }
                }
            }
        }
    }
}