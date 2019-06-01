<template>
    <div class="bgc-white p-20 bd col-md-6">
        <h6 class="c-grey-900">Personal Information</h6>
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
                        <label for="contactEmail">Email</label>
                        <input type="text"
                               class="form-control"
                               id="contactEmail"
                               placeholder="Juan dela Cruz">
                    </div>

                    <div class="form-group">
                        <label for="contactNno">Contact No.</label>
                        <input type="text"
                               class="form-control"
                               id="contactNno"
                               placeholder="639XX-XXX-XXXX">
                    </div>

                </form>
        </div>
    </div>


</template>

<script>
    export default {
        name: "SettingsPersonalComponent"
    }
</script>

<style scoped>

</style>