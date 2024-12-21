<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.4
 * @ Decoder version: 1.0.2
 * @ Release: 10/08/2022
 */

// Decoded file for php version 74.
namespace RSThemes\Helpers;

/**
 * Description of Lang
 *
 * @author Krystian
 */
class Lang
{
    private $translations = [];
    private $lang;
    private $path;
    public function __construct($path = false)
    {
        if(is_string($path)) {
            $this->path = $path . DS . "core";
        }
    }
    public static function factory($params = [])
    {
        $class = get_class();
        $lang = new $class($params);
        $lang->loadLang($lang->getLang());
        return $lang;
    }
    public static function getTranslation($text)
    {
        $class = get_class();
        $lang = new $class([]);
        $lang->loadLang($lang->getLang());
        $trans = $lang->trans($text);
        if($trans == $text) {
            $lang->loadLang($lang->getLang("english"));
            $trans = $lang->trans($text);
        }
        $lang = $trans;
        return $lang;
    }
    private function getLang($language = "")
    {
        if(!$language) {
            if(isset($_SESSION["Language"])) {
                $language = strtolower($_SESSION["Language"]);
            } elseif(isset($_SESSION["uid"])) {
                $client = (new \RSThemes\Models\Clients())->where("id", $_SESSION["uid"])->first();
                if($client && $client->language) {
                }
            }
        }
        if(!$language) {
            $conf = (new \RSThemes\Models\Configuration())->where("setting", "Language")->first();
            $language = $conf->value;
        }
        if(!$language) {
            $language = "english";
        }
        $this->lang = strtolower($language);
        return $this->lang;
    }
    private function loadLang($lang)
    {
        $file = RSTHEMES_DIR . DS . "resources" . DS . "lang" . DS . $lang . ".php";
        if(file_exists($file)) {
            $this->translations = (require $file);
        }
        if($this->path !== false) {
            $file = $this->path . DS . "lang" . DS . $lang . ".php";
            if(file_exists($file)) {
                $layoutTranslations = (require $file);
                $this->translations = $this->margeTranslations($this->translations, $layoutTranslations);
            } else {
                $file = $this->path . DS . "lang" . DS . "english" . ".php";
                if(file_exists($file)) {
                    $layoutTranslations = (require $file);
                    $this->translations = $this->margeTranslations($this->translations, $layoutTranslations);
                }
            }
            $override = $this->path . DS . "lang" . DS . "overrides" . DS . $lang . ".php";
            if(file_exists($override)) {
                $overrideLayoutTranslations = (require $override);
                $this->translations = $this->margeTranslations($this->translations, $overrideLayoutTranslations);
            }
            $cms = $this->path . DS . "lang" . DS . "cms" . DS . $lang . ".php";
            if(file_exists($cms)) {
                $layoutTranslations = (require $cms);
                $this->translations = $this->margeTranslations($this->translations, $layoutTranslations);
            } else {
                $cms = $this->path . DS . "lang" . DS . "cms" . DS . "english" . ".php";
                if(file_exists($cms)) {
                    $layoutTranslations = (require $cms);
                    $this->translations = $this->margeTranslations($this->translations, $layoutTranslations);
                }
            }
            $cms_override = $this->path . DS . "lang" . DS . "cms" . DS . "overrides" . DS . $lang . ".php";
            if(file_exists($cms_override)) {
                $overrideLayoutTranslations = (require $cms_override);
                $this->translations = $this->margeTranslations($this->translations, $overrideLayoutTranslations);
            }
        }
    }
    public function trans($keyValue = NULL, $var = false)
    {
        if(substr($keyValue, 0, 1) == "\$") {
            $key = substr($keyValue, 1);
            $whmcsLang = RSThemes::Instance()->getLang();
            if(isset($whmcsLang[$key])) {
                return $whmcsLang[$key];
            }
            return $key;
        }
        if($keyValue == NULL) {
            return $this->lang;
        }
        $keyPath = explode(".", $keyValue);
        $lang = $this->translations;
        foreach ($keyPath as $key) {
            if(is_array($lang)) {
                if(isset($lang[$key])) {
                    $lang = $lang[$key];
                    if(!is_array($lang)) {
                        return str_replace("%var%", $var, $lang);
                    }
                } else {
                    return $keyValue;
                }
            } else {
                return str_replace("%var%", $var, $lang);
            }
        }
    }
    public function margeTranslations(array &$array1, array &$array2)
    {
        $merged = $array1;
        foreach ($array2 as $key => &$value) {
            if(is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->margeTranslations($merged[$key], $value);
            } elseif(is_numeric($key)) {
                if(!in_array($value, $merged)) {
                    $merged[] = $value;
                }
            } else {
                $merged[$key] = $value;
            }
        }
        return $merged;
    }
}

?>