<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function __invoke()
    {
        // ->where('created_at', '>=', now()->subMonth()->startOfMonth())
        // ->where('created_at', '<=', now()->subMonth()->endOfMonth())

        //* Загальна кількість
        $stats = Donate::query()->count();
        //* за попередній місяц
        $stats = Donate::query()
            ->where('created_at', '>=', now()->subMonth()->startOfMonth())
            ->where('created_at', '<=', now()->subMonth()->endOfMonth())
            ->sum('amount');
        //* Середне значення
        $stats = Donate::query()->avg('amount');
        //* Мінімальне значення
        $stats = Donate::query()->min('amount');
        //* Максимальне значення
        $stats = Donate::query()->max('amount');

        return view('user.donates.index');
    }
}
