@extends('layouts.admin_app')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="full-container">
                <div class="email-app">
                    <schedules-sidebar></schedules-sidebar>
                    <div class="email-wrapper row remain-height pos-r scrollable bgc-white">
                        <schedules-list></schedules-list>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection