<template>
    <div id="mainContent">
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">
                        Contacts List
                    </h4>
                    <!--<table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Groups</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Groups</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>+639958510836</td>
                            <td>Group A | Group B</td>
                            <td>Edit | Delete</td>
                        </tr>

                        </tbody>
                    </table>-->
                    <div id="people">
                        <v-server-table url="/people" :columns="columns" :options="options"></v-server-table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "PhonebookContactsComponent"
    }
    new Vue({
        el:"#people",
        data: {
            columns:['id','name','age'],
        }
    });
</script>

<style scoped>

</style>