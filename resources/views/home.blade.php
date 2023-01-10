@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <h1>Trains</h1>

        <div class="row">

            @foreach ($trains as $train)
                <div class="col-4 mb-3">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title text-black">{{$train->departure_station}} -> {{$train->arrival_station}}</h5>
                            <h6 class="card-title text-black">{{$train->train_code}}</h6>
                            <h7 class="card-title text-black">Orario di partenza: {{$train->departure_time}}</h7>
                            <br>
                            <h7 class="card-title text-black">Orario di arrivo: {{$train->arrival_time}}</h7>
                            <div class="in-time-delated">
                                <span>In orario:
                                    @if($train->in_time)
                                        <i class="fa-solid fa-check"></i>
                                    @else
                                            <i class="fa-solid fa-x"></i>
                                    @endif
                                </span>

                                @if($train->in_time)
                                    <span>Cancellato</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</main>
@endsection
