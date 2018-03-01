@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Request Class</div>

                <div class="card-body">
                    <div class="code-container">
                        <pre><code>php artisan make:request ContactPost</code></pre>
                    </div>
                    <form method="POST" action="{{ route('form-four') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="favor" class="col-sm-4 col-form-label text-md-right">Message (min:3)</label>

                            <div class="col-md-6">
                                <input id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}">

                                @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
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
