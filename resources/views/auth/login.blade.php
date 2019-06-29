@extends('app_layouts.auth_app')

@section('content')
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
        <form class="form-horizontal" method="POST" action="/login">
            {{ csrf_field() }}
            <login-component :errors="{{$errors}}"></login-component>
        </form>
    </div>
@endsection