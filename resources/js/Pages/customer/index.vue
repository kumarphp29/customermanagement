<template>
    <div class="container">
        <h2 class="text-4xl font-extrabold text-center">Customer List</h2>
        <Link :href="`/customer/create`" class="button float-right">Add Customer</Link>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th class="td">Name</th>
                    <th class="td">Email</th>
                    <th class="td">Phone number</th>
                    <th class="td">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr  v-for="customer in customers.data" :key="customer.id"  class="tr" v-if="customers.data.length>0" >
                    <td class="td">{{customer.name}}</td>
                    <td class=" td">{{customer.email}}</td>
                    <td class="td">{{customer.phone_number}}</td>
                    <td class="td">
                        <Link :href="`/customer/${customer.id}`" class="td_link">View</Link>
                        <Link :href="`/customer/${customer.id}/edit`" class="td_link ml-3">Edit</Link>
                        <Link :href="`/customer/${customer.id}`" method="DELETE"  class="td_link ml-3" >Delete</Link>
                    </td>
                </tr>
                <tr v-else>
                    <td colspan="4" class="text-center mt-5">No Record's Found</td>
                </tr>
            </tbody>
        </table>
        <Pagination :links="customers.links" />

    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import Pagination from '../../Shared/Pagination.vue'
defineProps({
    customers:Array,
    pagination:Object
});
</script>