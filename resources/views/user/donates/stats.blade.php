@foreach($statistics as $stats)
    <h6>
        {{ __('Statistics for :currency', ['currency' => $stats->currency_id]) }}
    </h6>
    <div class="row">
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Numbers of donates
                    </div>

                    <h5 class="m-0">
                        {{ $stats->total_count }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Total sum
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats->total_amount, $stats->currency_id) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Average amount
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats->avg_amount, $stats->currency_id) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Minimum amount
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats->min_amount, $stats->currency_id) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>

        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Maximum amount
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats->max_amount, $stats->currency_id) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
    </div>
@endforeach
