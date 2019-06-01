@extends('layouts.admin_app')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="full-container">
                <div class="email-app">

                    <inbox-sidebar></inbox-sidebar>

                    <div class="email-wrapper row remain-height bgc-white ov-h">
                        <inbox-message-list></inbox-message-list>
                        <inbox-message-view></inbox-message-view>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection