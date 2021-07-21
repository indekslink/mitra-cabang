<?php
function webName()
{
    return 'British Propolish';
}
function active($uri)
{
    return  request()->is($uri) ? 'active' : '';
}
function copyright()
{
    $created = 2021;
    $now = date('Y');
    return $now > $created ? $created . ' - ' . $now : $created;
}
