<template>    
    <header>
    </header>
    <main class="container w-full p-4">
        <slot/>
    </main>
</template>
<script setup>
import { Link,usePage } from '@inertiajs/vue3';
</script>
<script>
const page = usePage();
</script>
<style scoped>
    .success{
        background-color: rgb(14, 168, 14);
        color:#fff;
    }
</style>