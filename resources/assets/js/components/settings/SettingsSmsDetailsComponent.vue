<template>
    <div class="bgc-white p-20 bd col-md-6">
        <h6 class="c-grey-900">SMS Information</h6>
        <div class="mT-30">
            <form>
                <div class="form-group">
                    <label for="brandName">Brand Name</label>
                    <input type="text"
                           class="form-control"
                           id="brandName"
                           placeholder="Brand Name">
                </div>

                <div class="form-group">
                    <label for="gatewayUrl">Gateway URL</label>
                    <input type="text"
                           class="form-control"
                           id="gatewayUrl"
                           placeholder="https://....">
                </div>
                <div class="form-group">
                    <label for="apiKey">API key</label>
                    <input type="text"
                           class="form-control"
                           id="apiKey"
                           placeholder="qwertWERT#$%^&345">
                </div>

            </form>
        </div>
    </div>


</template>

<script>
    export default {
        name: "SettingsSmsDetailsComponent"
    }
</script>

<style scoped>

</style>