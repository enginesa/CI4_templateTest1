<?php
function sideBarActiveClass($isUrl)
{

    $url = current_url(true);

    $current_url = "";
    if ($url->getSegment(3)) {
        $current_url = $url->getSegment(3);
        if ($url->getSegment(4)) $current_url .= "/" . $url->getSegment(4);
    }


    return $current_url == $isUrl ? 'active' : '';
}