@extends('layouts.master')

@section('content')
    <div class="col-xs-4">
        <div class="form-box">
            <h4 class="step-title">Step 3 : Your Results</h4>
            <p>
                You have calculated the area of a <strong>{{ Session::get('shape') }}</strong>
                with a {{ Session::get('dynamicText') }}. Below is your result:
            </p>
            <p style="text-align: center;padding: 50px;">
                The Area is {{ $area }}
            </p>
            <button onclick="window.location.href='/'">Start Over</button>
        </div>
    </div>
@endsection
