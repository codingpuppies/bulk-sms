<template>
    <div>
        <div v-if="this.errors.email" class="alert alert-danger" role="alert">{{this.errors.email[0]}}</div>

        <div class="form-group"><label class="text-normal text-dark">Username</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="John Doe">
        </div>
        <div class="form-group"><label class="text-normal text-dark">Password</label>
            <input type="password"
                   name="password"
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
    </div>
</template>

<script>
    export default {
        props: ['errors'],
        name: "LoginComponent",
        mounted () {
            // Do something useful with the data in the template
            console.log(this.errors)
        },

    }
</script>

<style scoped>

</style>