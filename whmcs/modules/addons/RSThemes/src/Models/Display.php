<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.4
 * @ Decoder version: 1.0.2
 * @ Release: 10/08/2022
 */

// Decoded file for php version 74.
namespace RSThemes\Models;
/**
 * Model DisplayRules
 * @property $name
 * @property $active
 * @property $created_at
 * @property $updated_at
 */
class Display extends \Illuminate\Database\Eloquent\Model
{
    public $table = "rsthemes_displays";
    protected $fillable = ["id", "name", "active", "created_at", "updated_at"];
    public function rules()
    {
        return $this->hasMany("RSThemes\\Models\\DisplayRule", "display_id");
    }
    public function menus()
    {
        return $this->hasMany("RSThemes\\Models\\Menu", "display_id");
    }
    public function getMainMenusAttribute()
    {
        return $this->menus->where("location", "Main Menu");
    }
    public function getSecondaryMenusAttribute()
    {
        return $this->menus->where("location", "Secondary Menu");
    }
    public function getFooterMenusAttribute()
    {
        return $this->menus->where("location", "Footer");
    }
}

?>