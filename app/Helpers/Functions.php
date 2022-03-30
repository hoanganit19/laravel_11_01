<?php
function activeMenu($routeName){
    $currentUrl = request()->url();
    $currentUrl = trim($currentUrl, '/');

    $routeUrl = route($routeName);

    $routeUrl = trim($routeUrl, '/');

    if ($currentUrl===$routeUrl){
        return 'active';
    }

    return '';
}

function openSubMenu($moduleName=''){

    $currentPrefix = request()->route()->getPrefix();
    $currentPrefixArr = array_filter(explode('/', $currentPrefix));
    $lastPrefix = end($currentPrefixArr);

    if ($lastPrefix===$moduleName){
        return 'menu-open';
    }

    return '';
}