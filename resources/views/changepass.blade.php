@extends('adminlte::page')

@section('title', 'Change Password')

@section('content_header')
<!doctype html>
<html lang="en" class="fullscreen-bg">

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div style="text-align: center;">
                                <h3>Ganti Password</h3>
                            </div>
                            <form method="post" action="{{URL::to('update-password')}}"class="border p-3 rouded">
                                @csrf

                                <div class="form-group row">
                                    <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                    <div class="col-md-6">
                                        <input  type="password" class="form-control" name="old_password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password " class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="old-password">
                                        @error('password')<div class="invalid-feedback">{{$message}}</div>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Retype New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control " name="password_confirmation" required autocomplete="password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
@stop