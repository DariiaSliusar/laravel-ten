<div class="row">
    <div class="col-12 col-md-4">
        <x-card>
            <x-card-body>
                <div class="mb-2 text-muted small">
                    Numbers of donates
                </div>

                <h5 class="m-0">
                    {{ $stats['total_count'] }}
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
                    {{ $stats['total_amount'] }}
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
                    {{ $stats['avg_amount'] }}
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
                    {{ $stats['min_amount'] }}
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
                    {{ $stats['max_amount'] }}
                </h5>
            </x-card-body>
        </x-card>
    </div>
</div>
