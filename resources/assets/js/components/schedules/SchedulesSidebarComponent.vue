<template>
    <div class="email-side-nav remain-height ov-h">
        <div class="h-100 layers">
            <div class="p-20 bgc-grey-100 layer w-100">
                <a href="/new-schedule"
                   class="btn btn-danger btn-block">
                    New Schedule</a>
            </div>
            <div class="scrollable pos-r bdT layer w-100 fxg-1">

                <ul class="p-20 nav flex-column">
                    <li class="nav-item">
                        <a href="javascript:void(0)"
                           class="nav-link c-grey-800 cH-blue-500 active">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-calendar"></i>
                                    <span>All</span></div>
                                <div class="peer"><span
                                        class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link c-grey-800 cH-blue-500">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-calendar"></i>
                                    <span>Today</span></div>
                                <div class="peer"><span
                                        class="badge badge-pill bgc-green-50 c-green-700">12</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link c-grey-800 cH-blue-500">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-calendar"></i>
                                    <span>Tomorrow</span>
                                </div>
                                <div class="peer"><span
                                        class="badge badge-pill bgc-blue-50 c-blue-700">12</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link c-grey-800 cH-blue-500">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-calendar"></i>
                                    <span>This Week</span>
                                </div>
                                <div class="peer"><span
                                        class="badge badge-pill bgc-blue-50 c-blue-700">12</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link c-grey-800 cH-blue-500">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-calendar"></i>
                                    <span>This Month</span>
                                </div>
                                <div class="peer"><span
                                        class="badge badge-pill bgc-blue-50 c-blue-700">12</span>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SchedulesSidebarComponent"
    }
</script>

<style scoped>

</style>