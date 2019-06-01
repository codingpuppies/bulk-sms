<template>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
        <form>
            <div class="form-group"><label class="text-normal text-dark">Username</label>
                <input type="text"
                       class="form-control"
                       placeholder="John Doe">
            </div>
            <div class="form-group"><label class="text-normal text-dark">Email Address</label>
                <input type="email"
                       class="form-control"
                       placeholder="name@email.com">
            </div>
            <div class="form-group"><label class="text-normal text-dark">Password</label>
                <input type="password"
                       class="form-control"
                       placeholder="Password">
            </div>
            <div class="form-group"><label class="text-normal text-dark">Confirm Password</label>
                <input type="password"
                       class="form-control"
                       placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "RegisterComponent"
    }
</script>

<style scoped>

</style>