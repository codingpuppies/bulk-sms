<template>
    <div class="masonry-item col-md-6">
        <div class="bd bgc-white">
            <div class="layers">
                <div class="layer w-100 p-20">
                    <h6 class="lh-1">Scheduled SMS</h6>
                </div>
                <div class="layer w-100">
                    <div class="bgc-light-blue-500 c-white p-20">
                        <div class="peers ai-c jc-sb gap-40">
                            <div class="peer peer-greed">
                                <h5>May 2019</h5>
                                <p class="mB-0">Scheduled SMS</p>
                            </div>
                            <div class="peer">
                                <h3 class="text-right">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive p-20">
                        <table class="table">
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
                        </table>
                    </div>
                </div>
            </div>
            <div class="ta-c bdT w-100 p-20">
                <a href="#">Check all the schedule</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SummaryScheduledSmsComponent"
    }
</script>

<style scoped>

</style>