<template>
    <div class="container">        
        <div class="mt-3">
            <div class="view_fulldiv mt-5">
                <h2 class="heading">Customer Details</h2>
        
                <div class="view_contentdiv mt-5">
                    <label class="view_labeldiv">Name:</label>
                    <span class="view_text">{{ customer.name }}</span>
                </div>
                <div class="view_contentdiv">
                    <label class="view_labeldiv">Email:</label>
                    <span class="view_text">{{ customer.email }}</span>
                </div>
                <div class="view_contentdiv">
                    <label class="view_labeldiv">Phone Number:</label>
                    <span class="view_text">{{ customer.phone_number }}</span>
                </div>
                <div class="view_contentdiv">
                    <label class="view_labeldiv">Address:</label>
                    <span class="view_text">{{ customer.address }}</span>
                </div>

                <div class="view_back_div">
                <div class=" w-2/3">
                    <Link :href="`/`" class="button float-right">Back</Link>
                </div>
            </div>
        
            </div>
            
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    customer:Array
});
</script>