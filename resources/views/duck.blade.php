@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h3>The Duck with color: <strong>{{ $color }}</strong>
                            and height: <strong>{{ $height }} </strong> ate at:</h3>
                        <ul>
                        @foreach($ducks as $duck)
                            <li>{{ $duck->ate_at }}</li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
