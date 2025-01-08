<?php

namespace App\Helpers;

class TextHelper {
    public static function getMinuteWord($count) {
        $modTen = $count % 10;
        $modHundred = $count % 100;

        if ($modTen == 1 && $modHundred != 11) {
            return 'минута';
        } elseif (($modTen >= 2 && $modTen <= 4) && ($modHundred < 12 || $modHundred > 14)) {
            return 'минуты';
        } else {
            return 'минут';
        }
    }
}