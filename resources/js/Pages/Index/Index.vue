<template class="-mt-6">
        <div class="dark:text-white">
        This is an  Index page
    </div>
    <div class="dark:text-white">
        <Link href="/show">Show Page</Link>
    </div>
    <div class="dark:text-white">
        The message is : {{ message }}
    </div>

</template>


<script setup>
  import { Link } from '@inertiajs/vue3';
  defineProps({
      message : String
    }
    );
    
</script>

<script>
import MainLayout from '../../Layout/MainLayout.vue';
import LandingHeader from '../../Layout/LandingHeader.vue';
 export default {
    layout : LandingHeader
 }
</script>