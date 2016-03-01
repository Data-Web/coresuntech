<?php

function convertFormatDate($timestamp)
{
    return date("Y-m-d\TH:i:sO", strtotime($timestamp));
}
