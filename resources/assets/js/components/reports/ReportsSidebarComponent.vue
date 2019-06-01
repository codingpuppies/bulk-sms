<template>
    <div class="email-side-nav remain-height ov-h">
        <div class="h-100 layers">
            <div class="p-20 bgc-grey-100 layer w-100">
                <a href="/new-schedule"
                   class="btn btn-success btn-block">
                    Search Records</a>
            </div>
            <div class="scrollable pos-r bdT layer w-100 fxg-1">

                <ul class="p-20 nav flex-column">
                    <h6 class="c-grey-90">
                        Filter
                    </h6>
                    <li class="nav-item">
                        <div class="bgc-white p-10 col-md-12">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bdc-grey-200 start-date"
                                                           placeholder="Date From" data-provide="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control bdc-grey-200 end-date"
                                                           placeholder="Date To" data-provide="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ReportsSidebarComponent"
    }
</script>

<style scoped>

</style>