<template>
    <!--
      This example requires updating your template:
  
      ```
      <html class="h-full bg-white">
      <body class="h-full">
      ```
    -->
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-8 lg:px-8">
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-2xl  shadow-xl bg-slate-200 dark:bg-slate-700 py-4 px-10 rounded-lg">
          <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img :src="imagePath" class="h-32 w-32 mx-auto mb-2" alt="">
            <!-- <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Sign in to your account</h2> -->
          </div>
        <form class="space-y-6" action="#" method="POST">
            <div class="grid grid-cols-2 gap-4">
            <div>
            <label for="fname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">FirstName</label>
            <div class="mt-2">
              <input id="fname" name="fname" type="text" autocomplete="fname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
  
          <div>
            <label for="lname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">MiddleName</label>
            <div class="mt-2">
              <input id="lname" name="lname" type="text" autocomplete="lname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
            <div>
            <label for="fname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">LastName</label>
            <div class="mt-2">
              <input id="fname" name="fname" type="text" autocomplete="fname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
  
          <div>
            <label for="lname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Gender</label>
            <div class="mt-2">
              <input id="lname" name="lname" type="text" autocomplete="lname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
            <div>
            <label for="fname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Registration No</label>
            <div class="mt-2">
              <input id="fname" name="fname" type="text" autocomplete="fname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
  
          <div>
            <label for="lname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Year of Study</label>
            <div class="mt-2">
              <input id="lname" name="lname" type="text" autocomplete="lname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
          <div>
            <label for="lname" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Course of Study</label>
            <div class="mt-2">
              <input id="lname" name="lname" type="text" autocomplete="lname" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
                  </div>
                </div>
            <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Telephone</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" />
            </div>
          </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Password</label>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                  </div>
                </div>
                <div>
                  <label for="password" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Confirm Password</label>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                  </div>
                </div>
            </div>
  
          <div>
            <Link href="#" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign Up </Link>
            <!-- <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign in</button> -->
          </div>
        </form>
  
        <p class="mt-10 text-center text-sm text-gray-500">
          Already registered?
          {{ ' ' }}
          <Link href="/login" class="font-semibold leading-6 text-blue-500 hover:text-blue-600">Sign In</Link>
        </p>
      </div>
    </div>
  </template>
  


<script setup>
 import { Link } from '@inertiajs/vue3';
 
 
</script>

<script>
import { defineComponent } from 'vue';
import LandingHeader from '../../Layout/LandingHeader.vue';

export default defineComponent({
    layout : LandingHeader,
  data() {
    return {
      imagePath: import.meta.env.BASE_URL + 'images/logo-170x172.png',
    };
  },
});
</script>