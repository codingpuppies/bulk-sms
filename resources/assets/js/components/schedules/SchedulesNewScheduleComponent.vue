<template>
    <div class="bgc-white p-20 bd col-md-8">
        <h6 class="c-grey-900">Create a Schedule</h6>
        <div class="mT-20">
                <form>
                    <div class="form-group">
                        <label for="contactName">Title</label>
                        <input type="text"
                               class="form-control"
                               id="contactName"
                               placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Enter message"></textarea>
                    </div>

                    <div class="form-group" >
                        <label for="group">Receipient</label>
                        <select class="form-control" multiple id="group" width="105%">
                            <option>Group A</option>
                            <option>Group B</option>
                        </select>

                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-outline-danger">Cancel</button>
                </form>
        </div>
    </div>


</template>

<script>
    export default {
        name: "SchedulesNewScheduleComponent"
    }
</script>

<style scoped>

</style>