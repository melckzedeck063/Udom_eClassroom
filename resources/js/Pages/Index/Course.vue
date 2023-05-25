<template>
    <div class="flex w-full">
        <SideNavigation />

        <div class="w-full  bg-white  dark:bg-slate-800">
            <div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="">
         <!-- <div class="text-center font-medium text-blue-500 my-2 text-lg">Semester #1</div> -->
         <div class="grid grid-cols-4 gap-4 mb-4 ">  
            <div class="" v-for="item in tasks"  :key="item.name" >
               <Link href="#" class="flex h-24 rounded bg-gray-100 hover:bg-gray-200 shadow-lg relative dark:bg-gray-700 dark:hover:bg-slate-600 px-2">
                  <div class="">
                    <component :is="item.icon" class="h-12 w-8 text-blue-500  group-hover:text-indigo-600" aria-hidden="true" />
                     <p class="text-xl text-gray-700 dark:text-gray-200"> {{ item.name }} </p>
                     <p class="text-sm text-blue-400 text-center font-medium my-1"> </p>
                  </div>
               </Link>
            </div>
         </div>
      </div>

      


   
   </div>
</div>
        </div>
    </div>
</template>

<script>
 import { Link } from '@inertiajs/vue3';
 import { defineComponent } from 'vue';
 import  SideNavigation from '../../Layout/SideBar.vue';

 export default defineComponent({
    components : {
        SideNavigation
    }
 })
</script>


<script setup>

   import { AcademicCapIcon, UserGroupIcon, BookOpenIcon,BookmarkIcon,BookmarkSquareIcon } from '@heroicons/vue/24/outline';
   import { DocumentDuplicateIcon, BellAlertIcon, DocumentArrowUpIcon, ComputerDesktopIcon,AdjustmentsHorizontalIcon } from '@heroicons/vue/24/solid'
   

   const tasks =  [
    {name : 'Individual Assignment', notifications : 2, icon : AcademicCapIcon},
    {name : 'Group Assignment', notifications : 2, icon : UserGroupIcon},
    {name : 'Individual Assignment', notifications : 2, icon : BookOpenIcon},
    {name : 'Tutorials', notifications : 2, icon : BookmarkSquareIcon},
    {name : 'Course  Materials', notifications : 2, icon : DocumentDuplicateIcon},
    {name : 'My Submitted', notifications : 2,  icon: DocumentArrowUpIcon },
    {name : 'Announcements', notifications : 2, icon : BellAlertIcon},
    {name : 'Online Assesment', notifications : 2, icon : ComputerDesktopIcon},
    {name : 'Forum', notifications : 2, icon : AdjustmentsHorizontalIcon},
   ]
</script>