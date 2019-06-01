@extends('layouts.admin_app')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="full-container">
                <div class="email-app">

                    <inbox-sidebar></inbox-sidebar>
                    <inbox-compose></inbox-compose>

                </div>
            </div>
        </div>
    </main>
@endsection