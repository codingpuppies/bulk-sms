<template>
    <div class="bgc-white p-20 bd col-md-6">
        <h6 class="c-grey-900">Create New Contact</h6>
        <div class="mT-30">
                <form>
                    <div class="form-group">
                        <label for="contactName">Name</label>
                        <input type="text"
                               class="form-control"
                               id="contactName"
                               placeholder="Juan dela Cruz">
                    </div>

                    <div class="form-group">
                        <label for="contactNno">Contact No.</label>
                        <input type="text"
                               class="form-control"
                               id="contactNno"
                               placeholder="639XX-XXX-XXXX">
                    </div>

                    <div class="form-group" >
                        <label for="group">Group</label>
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
        name: "PhonebookNewContactComponent"
    }
</script>

<style scoped>

</style>