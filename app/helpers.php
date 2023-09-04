<?php

if (! function_exists('active_link')) {
    function active_link(string $name, string $class = 'bg-cyan-400 font-bold text-emerald-900 p-2 rounded-2xl'): string
    {
        return request()->is($name) ? $class : 'font-bold text-emerald-900 hover:text-cyan-400';
    }
}


if (! function_exists('data_validate')) {
    function data_validate(array $attributes, array $rules)
    {
        return validator($attributes, $rules)->validate();
    }
}

if (! function_exists('__money')) {
    function __money(string $amount, string $currency_id): string
    {
        $value =  number_format($amount, 2, '.', ' ');

        return "{$value} {$currency_id}";
    }
}
