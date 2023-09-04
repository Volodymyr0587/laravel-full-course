<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function __invoke()
    {
        $stats = Donate::query()->count(); //*кількість записів в таблиці `donates`

        dd($stats);
    }
}
