<?php


function currentUriEquals($uri) {
    return Route::current()->uri == $uri;
}
