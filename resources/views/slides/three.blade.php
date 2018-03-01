@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Types of Validation</h1>
                <hr>
                <div class="mt-5 mb-5 text-left notes">
                    <p>&bull; Client-side (HTML5 &amp; JS)</p>
                    <p><strong>required</strong> attribute, <strong>pattern matching</strong> against a regular expression, <strong>min-length</strong>, <strong>max-length</strong>, number ranges, steps, etc.</p>
                    <p>&bull; Server-side</p>
                    <p>Needed, no matter what.</p>
                </div>

              <div class="clearfix">
                  <a class="clearfix btn btn-outline-secondary btn-lg mt-5 float-right" href="/slide-four" role="button">Continue &rarr;</a>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
