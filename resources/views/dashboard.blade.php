@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Панель управления') }}</div>

                    <div class="card-body">
                        <h3>Список зарегистрированных пользователей:</h3>

                        <ul>
                            @foreach ($users as $user)
                                <li>{{ $user->name }} ({{ $user->email }})</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="btn btn-primary">{{ __('На главную') }}</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
