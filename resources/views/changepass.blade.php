@extends('adminlte::page')

@section('title', 'Profile')

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
                            <form method="POST" action="">
                                @csrf

                                <div class="form-group row">
                                    <label for="oldpassword" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                    <div class="col-md-6">
                                        <input  type="oldpassword" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password " class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="newpassword" class="form-control " name="password" required autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Retype New Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="retype" class="form-control " name="password" required autocomplete="current-password">
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