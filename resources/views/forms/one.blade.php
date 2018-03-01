@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Basic Built-in Validations (some, not all!)</div>

                <div class="card-body">
                    @if($errors->any())
                    <div class="code-container" style="display:none;">
                        <pre><code>
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </code></pre>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('form-one') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address (email|unique:users)</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-sm-4 col-form-label text-md-right">URL (active_url)</label>

                            <div class="col-md-6">
                                <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}">

                                @if ($errors->has('url'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="count" class="col-sm-4 col-form-label text-md-right">Count (integer)</label>

                            <div class="col-md-6">
                                <input id="count" type="number" class="form-control{{ $errors->has('count') ? ' is-invalid' : '' }}" name="count" value="{{ old('count') }}">

                                @if ($errors->has('count'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('count') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="part_one" class="col-sm-4 col-form-label text-md-right">Part One</label>

                            <div class="col-md-6">
                                <input id="part_one" type="text" class="form-control{{ $errors->has('part_one') ? ' is-invalid' : '' }}" name="part_one" value="{{ old('part_one') }}">

                                @if ($errors->has('part_one'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('part_one') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="part_two" class="col-sm-4 col-form-label text-md-right">Part Two (required_with)</label>

                            <div class="col-md-6">
                                <input id="part_two" type="text" class="form-control{{ $errors->has('part_two') ? ' is-invalid' : '' }}" name="part_two" value="{{ old('part_two') }}">

                                @if ($errors->has('part_two'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('part_two') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="future" class="col-sm-4 col-form-label text-md-right">Future Date (after:date)</label>

                            <div class="col-md-6">
                                <input id="future" type="date" class="form-control{{ $errors->has('future') ? ' is-invalid' : '' }}" name="future" value="{{ old('future') }}">

                                @if ($errors->has('future'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('future') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="future_or_equal" class="col-sm-4 col-form-label text-md-right">Future_or_equal Date (future_or_equal:date)</label>

                            <div class="col-md-6">
                                <input id="future_or_equal" type="date" class="form-control{{ $errors->has('future_or_equal') ? ' is-invalid' : '' }}" name="future_or_equal" value="{{ old('future_or_equal') }}">

                                @if ($errors->has('future_or_equal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('future_or_equal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-sm-4 col-form-label text-md-right">Big Photo (1000x1000)</label>

                            <div class="col-md-6">
                                <input id="big_photo" class="form-control{{ $errors->has('big_photo') ? ' is-invalid' : '' }}" type="file" name="big_photo">
                                @if ($errors->has('big_photo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('big_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jpeg_photo" class="col-sm-4 col-form-label text-md-right">JPEG Photo (mimes:jpeg)</label>

                            <div class="col-md-6">
                                <input id="jpeg_photo" class="form-control{{ $errors->has('jpeg_photo') ? ' is-invalid' : '' }}" type="file" name="jpeg_photo" value="{{ old('jpeg_photo') }}">

                                @if ($errors->has('jpeg_photo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('jpeg_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" {{ old('agree') ? 'checked' : '' }}> I agree to the terms that I haven't read.
                                    </label>
                                    @if ($errors->has('agree'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('agree') }}</strong>
                                        </span>
                                    @endif
                                </div>
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
