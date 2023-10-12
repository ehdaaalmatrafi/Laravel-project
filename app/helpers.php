<?php

function lang($key, $replace = [])
{
    $locale = 'ar'; // Change this to the desired language code

    $path = resource_path("languages/$locale/messages.php");

    if (file_exists($path)) {
        $translations = require $path;
        $translation = $translations[$key] ?? $key;
        if (!empty($replace)) {
            $translation = str_replace(array_keys($replace), array_values($replace), $translation);
        }
        return $translation;
    }

    return $key;
}
