<x-post-body>

    <div class="m-10">
        Number of donations
        <h4>{{ $stats['total_count'] }}</h4>
    </div>

    <div class="m-10">
        Total sum
        <h4>{{ $stats['total_amount'] }}</h4>
    </div>

    <div class="m-10">
        Averange
        <h4>{{ $stats['avg_amount'] }}</h4>
    </div>

    <div class="m-10">
        Minimum
        <h4>{{ $stats['min_amount'] }}</h4>
    </div>

    <div class="m-10">
        Maximum
        <h4>{{ $stats['max_amount'] }}</h4>
    </div>

</x-post-body>
