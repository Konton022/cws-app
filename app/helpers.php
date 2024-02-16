<?php

if(! function_exists('active_link')){
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}

if(! function_exists('alert')){
    function alert(string $message, string $type='success' ): void
    {
        session(['alert'=> $message, 'type'=>$type]);
    }
}
