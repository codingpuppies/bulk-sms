<template>
    <div id="mainContent">
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">
                        Schedules
                    </h4>
                    <table id="dataTable" class="table" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th class="bdwT-0">Title</th>
                            <th class="bdwT-0">Message</th>
                            <th class="bdwT-0">To</th>
                            <th class="bdwT-0">Date</th>
                            <th class="bdwT-0">Time</th>
                            <th class="bdwT-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="fw-600">2019 Promo</td>
                            <td class="fw-600">Hello there!</td>
                            <td>
                                <span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Bulacan Riders</span>
                            </td>
                            <td>Nov 18</td>
                            <td>08:00 PM</td>
                            <td>
                                <span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Pending</span>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="bdwT-0">Title</th>
                            <th class="bdwT-0">Message</th>
                            <th class="bdwT-0">To</th>
                            <th class="bdwT-0">Date</th>
                            <th class="bdwT-0">Time</th>
                            <th class="bdwT-0">Status</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "SchedulesComponent"
    }
</script>

<style scoped>

</style>