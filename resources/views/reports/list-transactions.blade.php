@extends('layouts.admin_app')

@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="full-container">
                <div class="email-app">
                    <reports-sidebar></reports-sidebar>
                    <div class="email-wrapper row remain-height pos-r scrollable bgc-white">
                        <reports-list></reports-list>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection