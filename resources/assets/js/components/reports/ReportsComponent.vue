<template>
    <div id="mainContent">
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">
                        Transactions
                    </h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Receipient</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Receipient</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action/</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>May 17,2019 3:30 PM</td>
                            <td>Sent</td>
                            <td>Edit | Delete</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ReportsComponent"
    }
</script>

<style scoped>

</style>