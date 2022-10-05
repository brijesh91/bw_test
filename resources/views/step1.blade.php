@extends('layouts.master')

@section('content')
    <div class="col-xs-4">
        <div class="form-box">
            <h4 class="step-title">Step 1 : Select your shape</h4>
            <p>
                Please select the shape that you would like
                to calculate the area of and press the
                button "Go to step 2"
            </p>
            <form action="/step2" method="POST">
                @csrf
                @foreach ($shapes as $item)
                <input type="radio" name="shape" id="shape-{{ $item }}" value="{{ $item }}" required>
                <label for="shape-{{ $item }}">{{ ucwords($item) }}</label>
                <br>
                @endforeach
                <br>
                <button type="submit" class="next-action">Go to Step2</button>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="/" class="cancel-link">Cancel</a>
            </form>
        </div>
    </div>
@endsection
