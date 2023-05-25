<template>
    <div class="flex">
         <SideNavigation />
        <div class="w-full bg-white  dark:bg-slate-800">
            <div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="">
         <div class="text-center font-medium text-blue-500 my-2 text-lg">Semester #1</div>
         <div class="grid grid-cols-4 gap-4 mb-4 ">  
            <div class="" v-for="item in semister1"  :key="item.code" >
               <Link href="/dashboard/course" class="flex items-center  justify-center h-24 rounded hover:bg-blue-200 bg-gray-100 relative dark:bg-gray-700 dark:hover:bg-gray-600 shadow-md">
                  <div class="">
                     <p class="text-2xl text-gray-700 dark:text-gray-200"> {{ item.code }} </p>
                     <p class="text-smmm font-light text-center text-slate-600 dark:text-slate-200">Credit  {{ item.credit }} </p>
                     <p class="text-sm text-blue-500 text-center font-medium my-1"> {{ item.type }} </p>
                  </div>
                  <div class="top-1  right-1 absolute bg-red-500 rounded-full h-4 w-4">
                     <p class="text-sm text-gray-100 dark:text-gray-200 text-center -mt-0.5"> {{ item.notifications }} </p>
                  </div>
               </Link>
            </div>
         </div>
      </div>

      <div class="">
         <div class="text-center font-medium text-blue-500 my-2 text-lg">Semester #2</div>
         <div class="grid grid-cols-4 gap-4 mb-4">
            <div class=""  v-for="item in semester2" :key="item.code">
               <Link href="/dashboard/course" class="flex items-center  justify-center h-24 rounded hover:bg-blue-200 bg-gray-100 relative dark:bg-gray-700 dark:hover:bg-gray-600 shadow-md">
                  <div class="">
                     <p class="text-2xl text-gray-700 dark:text-gray-200"> {{ item.code }} </p>
                     <p class="text-smmm font-light text-center text-slate-600 dark:text-slate-200">Credit  {{ item.credit }} </p>
                     <p class="text-sm text-blue-500 text-center font-medium my-1"> {{ item.type }} </p>
                  </div>
                  <div class="top-1  right-1 absolute bg-red-500 rounded-full h-4 w-4">
                     <p class="text-sm text-gray-100 dark:text-gray-200 text-center -mt-0.5"> {{ item.notifications }} </p>
                  </div>
               </Link>
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
// import courseCard from '../Components/courseCard.vue';


export default defineComponent({
  components: {
    SideNavigation,
  }}
)


</script>

<script  setup>

const  semister1 = [
   {code : 'CP 111', credit : 9, type :  "core", notifications:  2},
   {code : 'IT 111', credit :  8.5, type : 'core', notifications:  3},
   {code  : 'MT  1112', credit  : 7.5, type : 'core', notifications: 6},
   {code : 'LG 103', credit :  7.5, type  : 'core', notifications:  4},
   {code : 'MT  1117', credit  : 7.5, type : 'core', notifications:  5},
   {code  : 'DS 102', credit :  7.5, type :  'core', notifications:  7}
];

const semester2 = [
   {code : 'CP 121', credit : 9, type :  "core", notifications:  2},
   {code : 'CS 123', credit :  8.5, type : 'core', notifications:  3},
   {code  : 'CS 126', credit  : 9, type : 'core', notifications: 6},
   {code : 'CN 125', credit :  8.5, type  : 'core', notifications:  4},
   {code : 'MT 1127', credit  : 7.5, type : 'core', notifications:  5},
   {code  : 'CG 124', credit :  8, type :  'core', notifications:  7}
]

// console.log(semister1)

</script>