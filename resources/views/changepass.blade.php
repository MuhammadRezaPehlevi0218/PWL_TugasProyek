@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<form method="post">
    {{ csrf_field() }}
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
        </div>
    </div>
</form>
@stop