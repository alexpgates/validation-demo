@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Using Closures</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form-three') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="reply" class="col-sm-4 col-form-label text-md-right">Reply and add value to a well-thought-out comment</label>

                            <div class="col-md-6">
                                <input id="reply" type="text" class="form-control{{ $errors->has('reply') ? ' is-invalid' : '' }}" name="reply" value="{{ old('reply') }}">

                                @if ($errors->has('reply'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('reply') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
