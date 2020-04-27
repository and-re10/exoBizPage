<?php

function maxStr($variable, $maxStr){
    if (strlen($variable) > $maxStr) {
        return substr($variable, 0, $maxStr)."...";
    } else {
        return $variable;
    };
};

function nbPosts($variable){
    if (count($variable) !== 0){
        return count($variable);
    };
};

function nbElem ($variable){
    if (count($variable) < 2) {
        return '';
    } else {
        return 'height: 300px;';
    };
};

function editError($variable, $name = " "){
    // $myvar = $variable;
    if(empty(old($name))) {
        // $myvar = old($name);
        return $variable;
    } else {
        // $myvar = old($name);
        return old($name);   
    };
};

function filtrePortfolio($variable){
    switch($variable){
        case "filter-app":
            return "filter-app";
        case "filter-card":
            return "filter-card";
        case "filter-web":
            return "filter-web";
    };
}

function filtreText($variable){
    switch($variable){
        case "filter-card":
            return "Card";
        case "filter-app":
            return "App";
        case "filter-web":
            return "Web";
    };
}

function changeIcon($variable){
    switch($variable){
        //Service1
        case "ion-ios-bookmarks-outline":
            return "far fa-bookmark";
        case "ion-ios-stopwatch-outline":
            return "fas fa-stopwatch";
        case "ion-ios-heart-outline":
            return "far fa-heart";

        //About
        case "ion-ios-speedometer-outline":
            return "fas fa-tachometer-alt";
        case "ion-ios-list-outline":
            return "far fa-list-alt";
        case "ion-ios-eye-outline":
            return "far fa-eye";

        //Service2
        case "ion-ios-analytics-outline":
            return "fas fa-chart-pie";
        case "ion-ios-paper-outline":
            return "far fa-sticky-note";
        case "ion-ios-barcode-outline":
            return "fas fa-barcode";
        case "ion-ios-people-outline":
            return "fas fa-users";

        //Contact
        case "ion-ios-location-outline":
            return "fas fa-map-marker-alt";
        case "ion-ios-telephone-outline":
            return "fas fa-phone";
        case "ion-ios-email-outline":
            return "far fa-envelope";
    };
}



?>