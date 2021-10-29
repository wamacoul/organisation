@extends('layouts.app')
@section('design')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <label for="code">rejoindre une entreprise</label> <input type="number" name="code">
                        <a href="{{ route('enterprise.create') }}" class="link-no-decoration"><button class="button">Creer votre entreprise</button></a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
