<template>
    <div>
        <Link href="/dashboard/course" class="flex items-center justify-center h-24 rounded bg-10ray-50 relative dark:bg-gray-700">
                  <div class="">
                     <p class="text-2xl text-gray-400 dark:text-gray-200"> {{ item.code }} </p>
                     <p class="text-smmm font-light text-center text-slate-600 dark:text-slate-200">Credit  {{ item.credit }} </p>
                     <p class="text-sm text-blue-400 text-center font-medium my-1"> {{ item.type }} </p>
                  </div>
                  <div class="top-1  right-1 absolute bg-red-500 rounded-full h-4 w-4">
                     <p class="text-sm text-gray-400 dark:text-gray-200 text-center -mt-0.5"> {{ item.notifications }} </p>
                  </div>
               </Link>
    </div>
</template>

<script>
 import { Link } from '@inertiajs/vue3';

</script>