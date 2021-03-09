@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Форма обратной сязи</h1>
                    </div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'feedback-send']) !!}

                        <div class="form-group row">
                            {!! Form::label('name', __('Имя') . "*", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                @php $errors->has('name') ? $class = "form-control is-invalid" : $class = "form-control"; @endphp
                                {!! Form::input('text', 'name', old('name'), ['class' => $class, 'placeholder' => 'Введите иям', "required", "autocomplete" => "email"]) !!}
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('last_name',__('Фамилия') . "*", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                @php $errors->has('last_name') ? $class = "form-control is-invalid" : $class = "form-control"; @endphp
                                {!! Form::input('text', 'last_name', old('last_name'), ['class' => $class, 'placeholder' => 'Введите фамилию', "required", "autocomplete" => "email"]) !!}
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('email',__('Email') . "*", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                @php $errors->has('email') ? $class = "form-control is-invalid" : $class = "form-control"; @endphp
                                {!! Form::email('email', old('email'), ['class' => $class, 'placeholder' => 'Введите email', "required", "autocomplete" => "email"]) !!}
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('subject',__('Тема') . "*", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                @php $errors->has('subject') ? $class = "form-control is-invalid" : $class = "form-control"; @endphp
                                {!! Form::input('text', 'subject', old('subject'), ['class' => $class, 'placeholder' => 'Введите тему письма', "required", "autocomplete" => "email"]) !!}
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('message',__('Сообщение') . "*", ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                @php $errors->has('message') ? $class = "form-control is-invalid" : $class = "form-control"; @endphp
                                {!! Form::textarea('message', old('message'), ['class' => $class, 'placeholder' => 'Введите сообщение']) !!}
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {!! Form::button('Отправить', ['type' =>'submit', 'class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
