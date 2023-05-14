<template>

        <div class="dark:text-white mt-8">
        This is a Show Page
    </div>
    <div class="dark:text-white">
        <Link href="/">Inde Page</Link>
    </div>
    <div class="dark:text-white">
        The message is : {{ message }}
    </div>

</template>


<script setup>
 import { Link } from '@inertiajs/vue3';
 defineProps({
     message : String
    })
</script>

<script>
import LandingHeader from '../../Layout/LandingHeader.vue';
   export default {
    layout : LandingHeader
   }
</script>