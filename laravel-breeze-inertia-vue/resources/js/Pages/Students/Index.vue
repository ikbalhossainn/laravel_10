<script setup>
import {usePage, useForm} from '@inertiajs/vue3'

    
    const{students} = usePage().props
    // console.log(students);

    const form = useForm({})
    function del(id){
        if(confirm("Are you sure to delete"))
            form.delete(route('students.destroy'),id)
    }
</script>

<template>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr  v-for="student in students">
                    <th scope="row">{{ student.id }}</th>
                    <td>{{ student.name }}</td>
                    <td>{{ student.email }}</td>
                    <td>{{ student.phone }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button> |
                        <button class="btn btn-danger" @click="del(student.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
