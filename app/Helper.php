<?php
function webName()
{
    return 'British Propolish';
}
function active($uri)
{
    return  request()->is($uri) ? 'active' : '';
}
