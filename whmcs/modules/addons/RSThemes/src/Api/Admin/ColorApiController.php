<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.4
 * @ Decoder version: 1.0.2
 * @ Release: 10/08/2022
 */

// Decoded file for php version 74.
namespace RSThemes\Api\Admin;
/**
 * Class ColorApiController
 */
class ColorApiController implements \RSThemes\Api\Interfaces\AdminInterface
{
    /**
     * @return stdClass
     */
    private $primarySecondary = ["primary", "secondary"];
    private $theme = "default";
    public function __construct($theme = "default")
    {
        if(isset($_GET["theme"])) {
            $this->theme = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $_GET["theme"]));
        } else {
            $this->theme = strtolower($theme);
        }
    }
    private function adjustBrightness($oriValue, $steps, $max = 100, $min = 0)
    {
        $value = $oriValue;
        if(0 < strpos("val" . $value, "hsla(") || 0 < strpos("val" . $value, "hsl(")) {
            $value = ltrim($value, "hsla(");
            $value = rtrim($value, ")");
            $value = explode(",", $value);
            $value[2] = $value[2] + $steps;
            if($max < $value[2]) {
                $value[2] = $max;
            }
            if($value[2] < $min) {
                $value[2] = $min;
            }
            if(0 < strpos("val" . $oriValue, "hsla(")) {
                return "hsla(" . $value[0] . "," . $value[1] . "," . $value[2] . "%," . $value[3] . ")";
            }
            return "hsl(" . $value[0] . "," . $value[1] . "," . $value[2] . "%)";
        }
        return $value;
    }
    public function getStyles($style = "all")
    {
        if($style != "all") {
            $styleObj = \RSThemes\Template\CssParser::getStyle($style, "", $this->theme);
            if(!$styleObj) {
                return [];
            }
            $styleData = $styleObj->parse()->get();
            foreach ($styleData as $group_index => $group) {
                foreach ($group as $item_index => $item) {
                    if(isset($item->description->type) && $item->description->type == "font") {
                        $item->variable->value = rtrim(ltrim($item->variable->value, "\""), "\"");
                    }
                    if(isset($item->description->hidden)) {
                        unset($styleData[$group_index][$item_index]);
                    }
                }
            }
            return $styleData;
        } else {
            $styleFiles = \RSThemes\Template\CssParser::getCssFiles("", $this->theme);
            $styles = [];
            foreach ($styleFiles as $files) {
                $fileIndex = substr($files, 0, -4);
                $styleData = \RSThemes\Template\CssParser::getStyle($files, "", $this->theme)->parse(true)->getDescription();
                if(!isset($styleData->index)) {
                } else {
                    $styles[$fileIndex] = $styleData;
                    $styles[$fileIndex]->file = $fileIndex;
                }
            }
            usort($styles, function ($item1, $item2) {
                $item1->index;
                $item2->index;
            });
            return $styles;
        }
    }
    public function getGroup($group = "")
    {
        $styleFiles = \RSThemes\Template\CssParser::getCssFiles("", $this->theme);
        $styles = [];
        foreach ($styleFiles as $files) {
            $fileIndex = substr($files, 0, -4);
            $styleData = \RSThemes\Template\CssParser::getStyle($files, "", $this->theme)->parse()->get();
            foreach ($styleData as &$section) {
                foreach ($section as &$item) {
                    if(isset($item->description->group) && $item->description->group == $group) {
                        $styles["var(" . $item->variable->name . ")"] = ["id" => "var(" . $item->variable->name . ")", "name" => $item->description->name, "value" => $item->variable->value];
                    }
                }
            }
        }
        return $styles;
    }
    private function getParsedValues($type, $val)
    {
        if($type == "gradient") {
            $val = ltrim($val, "linear-gradient(");
            $val = rtrim($val, ")");
            $val = explode(",", $val);
            $val[1] = substr($val[1], 0, strrpos($val[1], " "));
            $val[2] = substr($val[2], 0, strrpos($val[2], " "));
            $colors = [trim($val[1]), trim($val[2])];
            return $colors;
        }
        return $val;
    }
    public function getColors($scheme = "all", $type = "advanced")
    {
        if($scheme != "all") {
            $colorData = $this->getColor($scheme);
            if(isset($colorData["status"])) {
                return $colorData;
            }
            foreach ($colorData as &$colorGrandientFixSection) {
                foreach ($colorGrandientFixSection as &$colorGrandientFixObject) {
                    if($colorGrandientFixObject->description->type && $colorGrandientFixObject->description->type == "gradient") {
                        $colorGrandientFixObject->variable->value = $this->getParsedValues("gradient", $colorGrandientFixObject->variable->value);
                    }
                }
            }
            if($type == "simple") {
                $colorSimplified = [];
                foreach ($colorData as $index => $data) {
                    if($index == "sectiontype") {
                    } else {
                        $item = array_shift(array_slice($data, 1, 1));
                        $colorSimplified[] = $item;
                    }
                }
                return $colorSimplified;
            } elseif($type == "select") {
                $colors = [];
                foreach ($colorData as $sectionData) {
                    foreach ($sectionData as $colorIndex => $colorObject) {
                        if($colorIndex == "sectiontype") {
                        } else {
                            $gradient = false;
                            if(isset($colorObject->description->gradient) && $colorObject->description->gradient) {
                                if($colorObject->description->type && $colorObject->description->type == "gradient") {
                                    $gradient = $colorObject->variable->value;
                                } else {
                                    $gradient = $this->getParsedValues("gradient", $colorObject->variable->value);
                                }
                                $gradient[2] = $colorObject->description->gradienttype;
                            }
                            $colors["var(" . $colorObject->variable->name . ")"] = ["id" => "var(" . $colorObject->variable->name . ")", "gradient" => $gradient, "type" => $colorObject->description->type, "name" => $colorObject->description->section . " - " . $colorObject->description->name, "value" => $colorObject->variable->value];
                        }
                    }
                }
                return $colors;
            } else {
                return $colorData;
            }
        } else {
            $activeScheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
            $colorsFiles = \RSThemes\Template\CssParser::getCssFiles("colors", $this->theme);
            $colors = new \stdClass();
            foreach ($colorsFiles as $colorScheme) {
                $colorIndex = substr($colorScheme, 0, -4);
                $colorData = $this->getColor($colorScheme);
                $colors->{$colorIndex} = new \stdClass();
                $prisec = 0;
                foreach ($colorData as $index => $data) {
                    if($index == "description") {
                    } else {
                        foreach ($data as $colorObject) {
                            if(isset($colorObject->description->color_preview) && $colorObject->description->color_preview) {
                                if(!isset($this->primarySecondary[$prisec])) {
                                    if($colorIndex == $activeScheme) {
                                        $colors->{$colorIndex}->is_active = true;
                                    } else {
                                        $colors->{$colorIndex}->is_active = false;
                                    }
                                } else {
                                    $colorName = $this->primarySecondary[$prisec];
                                    $prisec++;
                                    $colors->{$colorIndex}->{$colorName} = $colorObject->variable->value;
                                }
                            }
                        }
                    }
                }
            }
            $colors->is_active = $activeScheme;
            return $colors;
        }
    }
    public function getValidatedColorScheme()
    {
        $activeScheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
        $first = "";
        $current = "";
        $array = $this->getColors();
        if(isset($array->{$activeScheme})) {
            return $array->{$activeScheme};
        }
        foreach ($array as $index => $value) {
            if(!is_object($value)) {
            } else {
                if(empty($first)) {
                    $first = $index;
                }
                if(!$activeScheme && $index == "default") {
                    $this->saveColor($index);
                    return $value;
                }
            }
        }
        if($current == "") {
            $this->saveColor($first);
            return $array->{$first};
        }
        return $array->{$current};
    }
    public function getColor($scheme)
    {
        $colorObj = \RSThemes\Template\CssParser::getColor($scheme, $this->theme);
        if(!$colorObj) {
            return ["status" => false, "text" => str_replace(":scheme:", $scheme, \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.color_scheme_load_error"))];
        }
        $colorData = $colorObj->parse()->get();
        return $colorData;
    }
    public function saveColor($scheme, $type = "advanced")
    {
        if(substr($scheme, -4) == ".css") {
            $scheme = substr($scheme, 0, -4);
        }
        $colorObj = \RSThemes\Template\CssParser::getColor($scheme, $this->theme);
        if(!$colorObj) {
            return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.color_scheme_not_exists")];
        }
        $colorObj->parse();
        if(isset($_POST["data"])) {
            foreach ($_POST["data"] as $varname => $value) {
                if($type == "simple") {
                    $item = $colorObj->getItemByVar($varname);
                    $colorObj->setValue($varname, $value);
                    foreach ($colorObj->get()[$item->description->section] as $items) {
                        if(isset($items->description->brightness)) {
                            $min = 0;
                            $max = 100;
                            if(isset($items->description->brightness_min)) {
                                $min = $items->description->brightness_min;
                            }
                            if(isset($items->description->brightness_max)) {
                                $max = $items->description->brightness_max;
                            }
                            $colorObj->setValue($items->variable->name, $this->adjustBrightness($value, $items->description->brightness, $max, $min));
                        }
                    }
                } else {
                    foreach ($value as $var => $subvalue) {
                        $item = $colorObj->getItemByVar($var);
                        if($item->description->type && $item->description->type == "gradient") {
                        } else {
                            $colorObj->setValue($var, $subvalue);
                        }
                    }
                }
            }
        }
        if(!is_writeable(\RSThemes\Template\CssParser::getCssPath("", $this->theme))) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath("", $this->theme) . \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.directory_not_writeable")];
        }
        if(file_exists(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css") && !is_writeable(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css")) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css" . \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.file_not_writeable")];
        }
        if(!$colorObj->isWriteable()) {
            return ["status" => false, "text" => str_replace(":scheme:", $scheme, \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.color_is_not_writeable"))];
        }
        if($colorObj->save()) {
            $success = \RSThemes\Template\CssParser::generateProductionCss($scheme, $this->theme);
            if(!$success) {
                return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.saved_not_generated")];
            }
            \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_last_save_time"], ["value" => time()]);
            \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme"], ["value" => $scheme]);
            return ["status" => true, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.success.color_scheme_saved")];
        }
        return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.color_scheme_could_not_be_saved")];
    }
    public function genMinifiedFile()
    {
        $scheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
        \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_last_save_time"], ["value" => time()]);
        return ["status" => \RSThemes\Template\CssParser::generateProductionCss($scheme, $this->theme), "text" => ""];
    }
    public function saveStyle($style)
    {
        if(substr($style, -4) == ".css") {
            $style = substr($style, 0, -4);
        }
        $styleObj = \RSThemes\Template\CssParser::getStyle($style, "", $this->theme);
        if(!$styleObj) {
            return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.style_not_exists")];
        }
        $styleObj->parse();
        foreach ($_POST["data"] as $section => $item) {
            foreach ($item as $var => $value) {
                $item = $styleObj->getItemByVar($var);
                if($item->description->type == "font") {
                    $fontUrl = "https://fonts.googleapis.com/css?family=" . $value . ":300,400,500,700,900&display=swap";
                    $styleObj->setValue($var . "-url", $fontUrl);
                    $value = "\"" . $value . "\"";
                } elseif($item->description->type == "custom-font") {
                    if($value == "" || $value == "unset") {
                        $value = "unset";
                    }
                    if($value != "unset" && isset($item->description->overwrite)) {
                        $styleObj->setValue($item->description->overwrite, $value);
                    }
                }
                $styleObj->setValue($var, $value);
            }
        }
        $status = false;
        if(!is_writeable(\RSThemes\Template\CssParser::getCssPath("", $this->theme))) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath("", $this->theme) . \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.directory_not_writeable")];
        }
        if(file_exists(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css") && !is_writeable(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css")) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "minified.css" . \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.file_not_writeable")];
        }
        if($styleObj->save()) {
            $status = true;
            $scheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
            \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_last_save_time"], ["value" => time()]);
            $success = \RSThemes\Template\CssParser::generateProductionCss($scheme, $this->theme);
            if(!$success) {
                return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.saved_not_generated")];
            }
        }
        return ["status" => $status, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.success.style_saved")];
    }
    public function restoreColor($color)
    {
        return $this->restoreStyle($color, "colors");
    }
    public function getFonts()
    {
        $fonts = [];
        foreach (\RSThemes\Template\CssParser::getGoogleFonts() as $item) {
            $fonts[] = $item->family;
        }
        return $fonts;
    }
    public function restoreStyle($style, $path = "")
    {
        if(!empty($path)) {
            $path = DS . $path;
        }
        if(substr($style, -4) == ".css") {
            $style = substr($style, 0, -4);
        }
        $status = copy(\RSThemes\Template\CssParser::getCssPath("defaults", $this->theme) . $path . DS . $style . ".css", \RSThemes\Template\CssParser::getCssPath("", $this->theme) . $path . DS . $style . ".css");
        if(!$status) {
            return ["status" => $status, "text" => str_replace(":style:", $style, \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.restore_failed"))];
        }
        $scheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
        \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_last_save_time"], ["value" => time()]);
        \RSThemes\Template\CssParser::generateProductionCss($scheme, $this->theme);
        return ["status" => $status, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.success.restore_success")];
    }
    public function updateCustomCss($style = "")
    {
        if($style == "" && isset($_POST["style"])) {
            $style = $_POST["style"];
        }
        file_put_contents(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "custom.css", html_entity_decode($style));
        $scheme = \RSThemes\Models\Settings::getValue(\RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_" . $this->theme . "_color_scheme");
        \RSThemes\Models\Settings::updateOrCreate(["setting" => \RSThemes\Helpers\AddonHelper::getCurrentTemplateAdminApi() . "_theme_last_save_time"], ["value" => time()]);
        \RSThemes\Template\CssParser::generateProductionCss($scheme, $this->theme);
    }
    public function getCustomCss()
    {
        $customCss = "";
        if(file_exists(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "custom.css")) {
            $customCss = file_get_contents(\RSThemes\Template\CssParser::getCssPath("", $this->theme) . DS . "custom.css");
        }
        return $customCss;
    }
    public function restoreAll()
    {
        $dir = ["", "colors"];
        foreach ($dir as $path) {
            foreach (\RSThemes\Template\CssParser::getCssFiles("defaults" . DS . $path, $this->theme) as $file) {
                $restoreStatus = $this->restoreStyle($file, $path);
                if(!$restoreStatus["status"]) {
                    return ["status" => false, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.restore_all_failed")];
                }
            }
        }
        return ["status" => true, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.success.restore_all_success")];
    }
    public function isInstalled()
    {
        if(0 < count(\RSThemes\Template\CssParser::getCssFiles("", $this->theme)) && 0 < count(\RSThemes\Template\CssParser::getCssFiles("colors", $this->theme))) {
            return ["status" => true, "text" => "installed"];
        }
        return ["status" => false, "text" => "not installed"];
    }
    public function updateStyleFileByIndex($index)
    {
        $type = "";
        if(!is_writeable(\RSThemes\Template\CssParser::getCssPath($type, $this->theme))) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath($type, $this->theme) . \RSThemes\Helpers\Lang::factory()->trans("ajax.color_api.error.directory_not_writeable")];
        }
        $typeDS = "";
        if(!empty($type)) {
            $typeDS = DS . $type;
        }
        $fileList = \RSThemes\Template\CssParser::getCssFiles("defaults" . $typeDS, $this->theme);
        if(!isset($fileList[$index])) {
            return ["status" => true, "text" => ""];
        }
        $this->updateStyleFile($fileList[$index], $type);
        return ["status" => false, "text" => ""];
    }
    public function updateStyleFile($file, $type = "")
    {
        $fileName = pathinfo($file)["basename"];
        if(!file_exists(\RSThemes\Template\CssParser::getCssPath($type, $this->theme) . DS . $fileName)) {
            $this->restoreStyle($fileName, $type);
        } else {
            $current = \RSThemes\Template\CssParser::getStyle($fileName, $type, $this->theme);
            if(!$current) {
                return ["status" => false, "text" => ""];
            }
            $current = $current->parse(false, false, true)->get();
            $this->restoreStyle($fileName, $type);
            $new = \RSThemes\Template\CssParser::getStyle($fileName, $type, $this->theme)->parse(false, false, false, true);
            foreach ($current as $group) {
                foreach ($group as $item) {
                    $new->setValue($item->variable->name, $item->variable->value);
                    if(isset($item->description->custom) && $item->description->custom) {
                        $new->setDesc($item->variable->name, $item->description->raw);
                    }
                }
            }
            $new->save();
        }
        return ["status" => true, "text" => ""];
    }
    public function updateStyles($type = "")
    {
        $delete = [];
        if($type == "colors") {
            if(!is_dir(\RSThemes\Template\CssParser::getCssPath("colors", $this->theme))) {
                mkdir(\RSThemes\Template\CssParser::getCssPath("colors", $this->theme));
            }
            foreach (\RSThemes\Template\CssParser::getCssFiles($type, $this->theme) as &$color) {
                $color = pathinfo($color)["basename"];
                $current = \RSThemes\Template\CssParser::getStyle($color, $type, $this->theme);
                $current->parse();
                if(isset($current->getDescription()->default) && !empty($current->getDescription()->default)) {
                    $status = copy(\RSThemes\Template\CssParser::getCssPath("defaults" . DS . "colors", $this->theme) . DS . $current->getDescription()->default . ".css", \RSThemes\Template\CssParser::getCssPath("defaults" . DS . "colors", $this->theme) . DS . $color);
                    $imploded = "";
                    foreach ($current->getDescription() as $index => $item) {
                        $imploded .= $index . ":" . $item . ";";
                    }
                    file_put_contents(\RSThemes\Template\CssParser::getCssPath("defaults" . DS . "colors", $this->theme) . DS . $color, str_replace(":root {", ":root { /* " . $imploded . " */", file_get_contents(\RSThemes\Template\CssParser::getCssPath("defaults" . DS . "colors", $this->theme) . DS . $color)));
                    $delete[] = \RSThemes\Template\CssParser::getCssPath("defaults" . DS . "colors", $this->theme) . DS . $color;
                    if(!$status) {
                        return ["status" => $status, "text" => str_replace(":style:", $color, \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.create_default_custom_style"))];
                    }
                }
            }
        }
        if(!is_writeable(\RSThemes\Template\CssParser::getCssPath($type, $this->theme))) {
            return ["status" => false, "text" => \RSThemes\Template\CssParser::getCssPath($type, $this->theme) . \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.error.directory_not_writeable")];
        }
        $typeDS = "";
        if(!empty($type)) {
            $typeDS = DS . $type;
        }
        foreach (\RSThemes\Template\CssParser::getCssFiles("defaults" . $typeDS, $this->theme) as $file) {
            if(!$this->updateStyleFile($file, $type)["status"]) {
            }
        }
        if(0 < count($delete)) {
            foreach ($delete as $del) {
                unlink($del);
            }
        }
        return ["status" => true, "text" => \RSThemes\Helpers\Lang::getTranslation("ajax.color_api.success.update_success")];
    }
}

?>