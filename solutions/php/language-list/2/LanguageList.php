<?php

function language_list(...$languages)
{
    return $languages;
}

function add_to_language_list($languages, $newLanguage)
{
    $languages[] = $newLanguage;
    return $languages;
}

function prune_language_list($languages)
{
    array_shift($languages);
    return $languages;
}

function current_language($languages)
{
    return $languages[0];
}

function language_list_length($languages)
{
    return count($languages);
}
