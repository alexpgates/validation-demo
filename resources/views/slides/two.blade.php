@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Why do we need this?</h1>
                <hr>
                <div class="mt-5 mb-5 text-left notes">
                    <p>&bull; User experience</p>
                    <p>&bull; Data integrity</p>
                    <p>&bull; Security</p>
                </div>

              <div class="clearfix">
                  <a class="clearfix btn btn-outline-secondary btn-lg mt-5 float-right" href="/slide-three" role="button">Continue &rarr;</a>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
