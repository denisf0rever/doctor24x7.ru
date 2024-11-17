<?php

namespace App\Helpers;

class LinkHelper {
    public static function convertToHtmlLink($text) {
        $pattern = '/
\[a href="([^"]+)" title="([^"]*)?" text="([^"]+)"\]/';
        
        return preg_replace_callback($pattern, function($matches) {
            $url = $matches[1];
            $title = !empty($matches[2]) ? $matches[2] : $matches[3]; // Используем текст как заголовок, если title пуст
            $linkText = $matches[3];

            return '<a href="' . htmlspecialchars($url) . '" title="' . htmlspecialchars($title) . '">' . htmlspecialchars($linkText) . '</a>';
        }, $text);
    }
}