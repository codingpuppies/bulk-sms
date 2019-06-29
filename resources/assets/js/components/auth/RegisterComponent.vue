<template>
    <div>
        <div v-if="Object.keys(this.errors).length>0" class="alert alert-danger" role="alert">
            <ul>
                <li v-for="error in this.errors">
                    {{ error[0] }}
                </li>
            </ul>
        </div>
        <div class="form-group ">
            <label class="text-normal text-dark">Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   placeholder="John Doe">
        </div>
        <div class="form-group">
            <label class="text-normal text-dark">Email Address</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="name@email.com">
        </div>
        <div class="form-group">
            <label class="text-normal text-dark">Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Password">
        </div>
        <div class="form-group">
            <label class="text-normal text-dark">Confirm Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   placeholder="Password">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Register</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['errors'],
        mounted() {
            // Do something useful with the data in the template
            console.log(this.errors)
        },
        name: "RegisterComponent"
    }
</script>

<style scoped>

</style>