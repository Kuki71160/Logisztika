<template>
    <div class="container mt-5">
        <h2 class="mb-4">Manage Users</h2>

        <!-- Form -->
        <div class="card p-3 mb-4">
            <h5>Add New User</h5>
            <div class="mb-2">
                <label>Name:</label>
                <input v-model="user.name" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label>Email:</label>
                <input v-model="user.email" type="email" class="form-control">
            </div>
            <div class="mb-2">
                <label>Role:</label>
                <select v-model="user.role" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
            <button class="btn btn-primary" @click="addUser">Add User</button>
        </div>

        <!-- User List -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.role }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: { name: '', email: '', role: 'staff' },
            users: []
        };
    },
    methods: {
        async addUser() {
            const response = await axios.post('/api/users', this.user);
            this.users.push(response.data.user);
        },
        async fetchUsers() {
            const response = await axios.get('/api/users');
            this.users = response.data.users;
        }
    },
    mounted() {
        this.fetchUsers();
    }
};
</script>
