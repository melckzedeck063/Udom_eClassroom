<template>
    <div class="flex">
         <SideNavigation />
        <div class="w-full">
            <div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="">
         <div class="text-center font-medium text-blue-500 my-2 text-lg">Semester #1</div>
         <div class="grid grid-cols-4 gap-4  mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
         </div>
      </div>

      <div class="">
         <div class="text-center font-medium text-blue-500 my-2 text-lg">Semester #2</div>
         <div class="grid grid-cols-4 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center h-24 rounded bg-10ray-50 dark:bg-gray-700">
               <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
         </div>
      </div>
      <div class="flex items-center justify-center h-48 mb-4 rounded bg-10ray-50 dark:bg-gray-700">
         <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
      </div>
      <!-- <div class="grid grid-cols-2 gap-4 mb-4">
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
      </div> -->

      <!-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-10ray-50 dark:bg-gray-700">
         <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
      </div> -->

      <div class="grid grid-cols-2 gap-4">
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <!-- <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-100 h-28 dark:bg-gray-700">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
         </div> -->
      </div>
   </div>
</div>
        </div>
    </div>
</template>


<script >
import { Link } from '@inertiajs/vue3';
import { defineComponent } from 'vue';
import LandingHeader from '../../Layout/LandingHeader.vue' ;
import SideNavigation from '../../Layout/SideBar.vue';


export default defineComponent({
  components: {
    SideNavigation
  }}
)




</script>