<?php
namespace App\Classes;

class Util
{
    /**
     *
     * @param mixed $data
     * @param bool $dumpAndDie
     */
    public static function pre($data, $dumpAndDie = false) {
        echo '<pre>';
        $dumpAndDie ? die(var_dump($data)) : print_r($data);
        echo '</pre>';
    }

    /**
     * @param mixed $data
     */
    public static function dd($data) {
        self::pre($data, true);
    }
}