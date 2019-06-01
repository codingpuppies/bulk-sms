<template>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
        <form>
            <div class="form-group"><label class="text-normal text-dark">Username</label>
                <input type="email"
                       class="form-control"
                       placeholder="John Doe">
            </div>
            <div class="form-group"><label class="text-normal text-dark">Password</label>
                <input type="password"
                       class="form-control"
                       placeholder="Password">
            </div>
            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox"
                                   id="inputCall1"
                                   name="inputCheckboxesCall"
                                   class="peer"> <label
                                for="inputCall1" class="peers peer-greed js-sb ai-c">
                            <span class="peer peer-greed">Remember Me</span></label>
                        </div>
                    </div>
                    <div class="peer">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="text-center">
                    Not Yet a Member? <a href="/register">Register</a> | <a href="/password/email">Forgot Password</a>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "LoginComponent"
    }
</script>

<style scoped>

</style>