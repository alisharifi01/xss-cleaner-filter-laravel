<?php

Route::filter('xss',function(){
    XSS::clean();
});
