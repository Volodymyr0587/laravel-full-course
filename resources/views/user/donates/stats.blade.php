@foreach ($statistics as $stats)
    <h6 class="text-blue-500">
        {{ __('Statistics for :currency', ['currency' => $stats->currency_id]) }}
    </h6>
    <x-post-body>

        <div class="m-10">
            Number of donations
            <h4>{{ $stats->total_count }}</h4>
        </div>

        <div class="m-10">
            Total sum
            <h4>{{ __money($stats->total_amount, $stats->currency_id) }}</h4>
        </div>

        <div class="m-10">
            Averange
            <h4>{{ __money($stats->avg_amount, $stats->currency_id) }}</h4>
        </div>

        <div class="m-10">
            Minimum
            <h4>{{ __money($stats->min_amount, $stats->currency_id) }}</h4>
        </div>

        <div class="m-10 mb-10">
            Maximum
            <h4>{{ __money($stats->max_amount, $stats->currency_id) }}</h4>
        </div>

    </x-post-body>
@endforeach
