@extends('layouts.admin_app')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="full-container">
                <div class="email-app">

                    <settings-sidebar></settings-sidebar>
                    <div class="email-wrapper row remain-height pos-r scrollable bgc-white">
                        <settings-sms></settings-sms>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection