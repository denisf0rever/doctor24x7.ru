<?php

declare(strict_types=1);

if (!function_exists('array_map_assoc')) {
    /**
     * Apply a mapping callback receiving key and value as arguments.
     * The standard array_map doesn't pass the key to the callback. But in the case of associative arrays,
     * it could be really helpful.
     *
     * array_map_assoc(function ($key, $value) {
     *  ...
     * }, $items)
     *
     * @param callable $callback
     * @param array $array
     * @return array
     */
    function array_map_assoc(callable $callback, array $array): array
    {
        // map original array keys, and call $callable with $key and $value.
        return array_map(function($key) use ($callback, $array){
            return $callback($key, $array[$key]);
        }, array_keys($array));
    }
}