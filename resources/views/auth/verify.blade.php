@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>@extends("auth.layouts.app" , ["meta_title" => "Verify Email"])
            @section('content')


                <h1 class="title">Verify Email</h1>

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form action="{{ route('verification.resend') }}" method="POST" class="subscription-form form-row">
                    @csrf


                    <div class="col-12 row mb-4 mt-2">
                        <div class="col-md-6">
                            <button type="submit" class="axil-button button-rounded"><span>Click to resend</span></button>
                        </div>
                    </div>

                </form>


            @endsection

        </div>
    </div>
</div>
@endsection
