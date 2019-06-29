@extends('app_layouts.admin_app')

@section('content')
        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                <div class="row gap-20 masonry pos-r">
                    <div class="masonry-sizer col-md-6">
                    </div>
                    {{--Counts--}}
                    <summary-count></summary-count>
                    {{--Scheduled SMS--}}
                    <summary-scheduled-sms></summary-scheduled-sms>
                    {{--Stats--}}
                    <summary-stats></summary-stats>

                </div>
            </div>
        </main>
@endsection
