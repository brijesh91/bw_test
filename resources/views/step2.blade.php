@extends('layouts.master')

@section('content')
    <div class="col-xs-4">
        <div class="form-box">
            <h4 class="step-title">Step 2 : Insert your values</h4>
            <p>
                You have selected a <strong>{{ Session::get("shape") }}</strong>, please input
                the required variables.
            </p>
            <form action="/step3" method="POST">
                @csrf
                @foreach ($shapeValues as $item)
                    <label class="form-group" for="shape-{{ $item }}">{{ ucwords($item) }}&nbsp;:</label>&nbsp;
                    <input type="text" name="{{ $item }}" id="shape-{{ $item }}" placeholder="text" required>
                    <br>
                @endforeach
                <br>
                <button type="submit">Go to Step3</button>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="/">Cancel</a>
            </form>
        </div>
    </div>
@endsection
