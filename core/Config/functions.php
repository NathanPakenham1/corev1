<?php

function sanitizeString(string $string) {
   $string = trim($string);
   $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
    return $string;
}