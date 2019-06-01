<template>
    <div class="email-side-nav remain-height ov-h">
        <div class="h-100 layers">
            <div class="p-20 bgc-grey-100 layer w-100">
                <a href="/update-settings"
                   class="btn btn-success btn-block">
                    Update</a>
            </div>
            <div class="scrollable pos-r bdT layer w-100 fxg-1">
                <ul class="p-20 nav flex-column">
                    <li class="nav-item">
                        <a href="/settings/personal"
                           class="nav-link c-grey-800 cH-blue-500 active">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-user"></i>
                                    <span>Personal</span></div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/settings/sms" class="nav-link c-grey-800 cH-blue-500">
                            <div class="peers ai-c jc-sb">
                                <div class="peer peer-greed"><i class="mR-10 ti-email"></i>
                                    <span>SMS</span></div>
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
        name: "SettingsSidebarComponent"
    }
</script>

<style scoped>

</style>