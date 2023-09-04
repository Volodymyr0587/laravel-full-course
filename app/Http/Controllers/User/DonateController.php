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
        // $total_count = Donate::query()->count();
        // //* за попередній місяц
        // $stats = Donate::query()
        //     ->where('created_at', '>=', now()->subMonth()->startOfMonth())
        //     ->where('created_at', '<=', now()->subMonth()->endOfMonth())
        //     ->sum('amount');
        //* Загальна сума
        // $total_amount = Donate::query()->sum('amount');
        // //* Середне значення
        // $avg_amount = Donate::query()->avg('amount');
        // //* Мінімальне значення
        // $min_amount = Donate::query()->min('amount');
        // //* Максимальне значення
        // $max_amount = Donate::query()->max('amount');

        // $stats = [
        //     'total_count' => Donate::query()->count(),
        //     'total_amount' => Donate::query()->sum('amount'),
        //     'avg_amount' => Donate::query()->avg('amount'),
        //     'min_amount' => Donate::query()->min('amount'),
        //     'max_amount' => Donate::query()->max('amount'),
        // ];

        $stats = Donate::query()
            ->selectRaw('count(*) as total_count')
            ->selectRaw('sum(amount) as total_amount')
            ->selectRaw('avg(amount) as avg_amount')
            ->selectRaw('min(amount) as min_amount')
            ->selectRaw('max(amount) as max_amount')
            ->first();

        // dd($stats->toArray());

        return view('user.donates.index', compact('stats'));
    }
}
