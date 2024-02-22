<template>
    <div class="flex gap-1" v-if="links.length>3">
        <div >
            <Link v-for="(link,index) in links" :key="index" :href="link.url" class="py-2 px-4 rounded-md" :class="{'bg-indigo text-gray-300' :link.active}">
                <span v-if="index==0 ">Previous</span>

                <span v-else-if="(index +1)==links.length ">Next </span>
                <span v-else>{{ link.label }}</span>
                </Link>
            
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    links:Array
});
</script>
