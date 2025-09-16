@extends('layouts.admin')
@section('title', 'Metabee - Login')

@section('content')
    <div class="container-fluid min-vh-100 d-flex flex-column p-0 position-relative">
        <div id="bg-form-main" class="flex-fill d-flex align-items-center justify-content-center"></div>
        <div id="bg-form-secondary" class="flex-fill d-flex align-items-center justify-content-center"></div>

        <div class="position-absolute top-50 start-50 translate-middle w-100 px-3 px-md-0" style="z-index: 10;">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card p-3 p-sm-4 p-md-5">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('images/login/logo.png') }}" class="card-img-top img-fluid" style="width: 100%;" alt="Logo MetaBee">
                        </div>
                        <div class="card-body border-top border-1">
                            <div class="mb-3 mb-md-4">
                                <h4 class="text-center">Bem-vindo à MetaBee</h4>
                                <p class="text-center">Acesse sua conta para continuar</p>
                            </div>

                            <form action="{{ route('admin.login.do') }}" method="POST">
                                @csrf

                                <div class="mb-3 mb-md-4">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" name="email" id="email"
                                           class="form-control form-control-lg @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3 mb-md-4">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" name="password" id="password"
                                           class="form-control form-control-lg @error('password') is-invalid @enderror">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-secondary w-100 py-2 py-md-3">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
