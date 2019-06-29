@extends('app_layouts.auth_app')

@section('content')
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <register-component :errors="{{$errors}}"></register-component>

        </form>
    </div>
@endsection
