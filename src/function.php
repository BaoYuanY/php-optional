<?php

function optional($obj, $default = null)
{
    return new \Yby0304\Optional\Optional($obj, $default);
}