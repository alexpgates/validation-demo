@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Custom Rule</div>

                <div class="card-body">
                    <div class="code-container">
                        <pre><code>php artisan make:rule Polite</code></pre>
                    </div>
                    <form method="POST" action="{{ route('form-two') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="favor" class="col-sm-4 col-form-label text-md-right">Favor (Polite)</label>

                            <div class="col-md-6">
                                <input id="favor" type="text" class="form-control{{ $errors->has('favor') ? ' is-invalid' : '' }}" name="favor" value="{{ old('favor') }}">

                                @if ($errors->has('favor'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('favor') }}</strong>
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
