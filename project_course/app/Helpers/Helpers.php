<?php

if (!function_exists('mix_e')) {
    function mix_e($path)
    {
        return url(mix($path));
    }
}
