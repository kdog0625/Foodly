@extends('app')

@section('title', 'ユーザー登録')

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
       <div class="col-md-12">
            <div class="card">
                <div class="card-header  text-center">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection