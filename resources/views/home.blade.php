@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Добро пожаловать на наш сайт') }}</div>

                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Зарегистрироваться') }}</a>
                            <a href="{{ route('login') }}" class="btn btn-secondary">{{ __('Войти') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
