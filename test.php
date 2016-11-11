<?php

function ballVolume($R)
{
    return 4 * pi() * $R ** 3 / 3;
}
echo ballVolume(1);