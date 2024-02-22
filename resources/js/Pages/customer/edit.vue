<template>
    <div class="container">
        <h2 class="heading">Edit Customer</h2>
        <div class="mt-3">
            <form @submit.prevent="form.put('/customer/'+customer.id)" class="form ">
                <div class="mb-5">
                    <label  class="form-label">Name</label>
                    <input type="text" name="name" v-model="form.name" class="input-form"/>
                    <div v-if="form.errors.name" class="error_message">{{ form.errors.name }}</div>
                </div>
                <div class="mb-5">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" v-model="form.email"  class="input-form"/>
                    <div v-if="form.errors.email" class="error_message">{{ form.errors.email }}</div>
                </div>
                <div class="mb-5">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" v-model="form.phone_number" class="input-form"/>
                    <div v-if="form.errors.phone_number" class="error_message">{{ form.errors.phone_number }}</div>
                </div>
                <div class="mb-5">
                    <label class="form-label">Address</label>
                    <textarea name="address" v-model="form.address" class="input-form" ></textarea>
                    <div v-if="form.errors.address" class="error_message">{{ form.errors.address }}</div>
                </div>
                <div>
                    <button type="submit" class="button">Submit</button>
                    <Link :href="`/`" class="button ml-5">Back</Link>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
import { router } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    customer: {
        type: Object,
        default: () => ({}),
    },
});
const form = useForm({
    name: props.customer.name,
    email: props.customer.email,
    phone_number: props.customer.phone_number,
    address: props.customer.address,
})
</script>