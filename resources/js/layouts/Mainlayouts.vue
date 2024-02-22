<template>    
    <header>
    </header>
    <main class="container w-full p-4">
        <div v-if="message" >
            <div class="alert items-center justify-center">
            {{ message }}
            </div>
          </div>
        <slot/>
    </main>
</template>
<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
</script>
<script>
const page = usePage();
const message = computed(() => page.props.flash?.success);
</script>
<style scoped>
    .success{
        background-color: rgb(14, 168, 14);
        color:#fff;
    }
</style>