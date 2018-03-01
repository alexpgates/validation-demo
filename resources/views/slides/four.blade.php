@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">What's the best way?</h1>
                <hr>
                <div class="mt-5 mb-5 text-left notes">
                    <p>One of the most frustrating things when learning Laravel / watching Laracasts was being shown several ways to do the same thing. I just wanted to be shown the <strong>best</strong> way to do&nbsp;it.</p>
                    <p>But the beauty of Laravel is that the <strong>best</strong> way to do it depends on what <strong>you’re</strong> doing, and knowing several ways to do the same things will help you make the right decisions and be a better&nbsp;developer.</p>
                </div>

              <div class="clearfix">
                  <a class="clearfix btn btn-outline-secondary btn-lg mt-5 float-right" href="/one" role="button">Continue &rarr;</a>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
