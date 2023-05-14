<template>
    <span class="dark:text-white">
        <Link  href="/"> Index Page </Link>
    </span>
    <span class="text-white dark:text-slate-800" >  home sweet home  </span>
    <span class="dark:text-white">
        <Link  href="/show" > Show Page </Link>
    </span>
    <slot></slot>
</template>


<script setup>

import { Link } from '@inertiajs/vue3';
</script>