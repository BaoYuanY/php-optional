<?php

function optional($obj, $default = null)
{
    return new \yby\optional\Optional($obj, $default);
}