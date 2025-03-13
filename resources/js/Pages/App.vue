<template>
    <div class="container text-center mt-5">
        <h1 class="mb-4">Admin Dashboard</h1>
        <div class="d-flex justify-content-center gap-3">
            <router-link to="/users" class="btn btn-primary">Manage Users</router-link>
            <router-link to="/categories" class="btn btn-success">Manage Categories</router-link>
            <router-link to="/products" class="btn btn-warning">Manage Products</router-link>
        </div>
    </div>
</template>

<style scoped>
h1 {
    font-size: 2rem;
    color: #333;
}
</style>
