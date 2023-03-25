@props([
    'counter',
    'growth_percentage',
    'class_1',
    'class_2',
    'class_3',
    'card_title',
])

<div class="col-xl-3 col-lg-6">

    {{--Change background color--}}
    <div class="{{ $class_1 }}">

        <div class="card-statistic-3 p-4">

            {{--Change the fontawesome background icon--}}
            <div class="card-icon card-icon-large">
                <i class="{{ $class_2 }}"></i>
            </div>
            <div class="mb-4">

                {{--Change the card title--}}
                <h5 class="card-title mb-0">{{ $card_title }}</h5>
            </div>
            <div class="row align-items-center mb-2 d-flex">
                <div class="col-8">
                    <h2 class="d-flex align-items-center mb-0">

                        {{--Change the card item thats being counted--}}
                        {{ $counter  }}
                    </h2>
                </div>
                <div class="col-4 text-right">

                    {{--Change the card item counter percentage--}}
                    <span>{{ $growth_percentage }}% <i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="progress mt-1 " data-height="8" style="height: 8px;">

                {{--Change the progress bar color and width percentage--}}
                <div class="progress-bar {{ $class_3 }}" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: {{ $growth_percentage }}%;"></div>
            </div>
        </div>
    </div>
</div>
