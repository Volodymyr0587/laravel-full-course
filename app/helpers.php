<?php

if (! function_exists(('active_link'))) {
    function active_link(string $name, string $class = 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl'): string
    {
        return request()->is($name) ? $class : 'font-bold text-emerald-900 hover:text-cyan-400';
    }
}