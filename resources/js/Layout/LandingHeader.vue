<template>
    <header class="bg-white -mt-6 dark:bg-slate-900">
      <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 dark:text-white" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5 flex-row flex space-x-4">
              <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" /> -->
              <img class="h-14 w-auto  -mt-4 -ml-4" :src="imagePath" alt="" />
              <span class="text-slate-800 text-lg dark:text-white">UDOM eCLASSROOM</span>
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-white" @click="mobileMenuOpen = true">
            <span class="sr-only">Open main menu</span>
            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
          </button>
        </div>
        <PopoverGroup class="hidden lg:flex lg:gap-x-12 ml-6">
          <!-- <Popover class="relative">
            <PopoverButton class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 dark:text-white">
              Product
              <ChevronDownIcon class="h-5 w-5 flex-none text-gray-400" aria-hidden="true" />
            </PopoverButton>
  
            <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
              <PopoverPanel class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                <div class="p-4">
                  <div v-for="item in products" :key="item.name" class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                      <component :is="item.icon" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" aria-hidden="true" />
                    </div>
                    <div class="flex-auto">
                      <a :href="item.href" class="block font-semibold text-gray-900">
                        {{ item.name }}
                        <span class="absolute inset-0" />
                      </a>
                      <p class="mt-1 text-gray-600">{{ item.description }}</p>
                    </div>
                  </div>
                </div>
                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50 dark:bg-slate-700">
                  <a v-for="item in callsToAction" :key="item.name" :href="item.href" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                    <component :is="item.icon" class="h-5 w-5 flex-none text-gray-400" aria-hidden="true" />
                    {{ item.name }}
                  </a>
                </div>
              </PopoverPanel>
            </transition>
          </Popover> -->
  
          <Link href="/" class="text-sm font-semibold flex-row flex justify-center space-x-3 leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <span><HomeIcon class="h-5 w-5 mr-1" aria-hidden="true" /></span> Home
        </Link>
          <Link href="/show" class="text-sm font-semibold flex-row flex space-x-3 leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <QuestionMarkCircleIcon class="h-5 w-5 mr-1 mt-0.5" aria-hidden="true" />
            Helps
        </Link>
          <Link href="#" class="text-sm font-semibold leading-6 text-gray-900 flex-row flex space-x-3 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <DocumentDuplicateIcon class="h-5 w-5 mr-1 mt-0.5" aria-hidden="true" />Docs
        </Link>
        </PopoverGroup>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <Link href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1 flex">Log in  <span aria-hidden="true">&rarr;</span></Link>
        </div>
      </nav>
      <Dialog as="div" class="lg:hidden" @close="mobileMenuOpen = false" :open="mobileMenuOpen">
        <div class="fixed inset-0 z-10" />
        <DialogPanel class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white dark:bg-slate-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5 flex-row flex space-x-4">
              <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" /> -->
              <img class="h-14 w-auto  -mt-4 -ml-2" :src="imagePath" alt="" />
              <span class="text-slate-800 text-lg dark:text-white">UDOM eCLASSROOM</span>
          </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-white" @click="mobileMenuOpen = false">
              <span class="sr-only dark:text-white">Close menu</span>
              <XMarkIcon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <!-- <Disclosure as="div" class="-mx-3" v-slot="{ open }">
                  <DisclosureButton class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 hover:bg-gray-50 dark:text-white dark:hover:bg-slate-500">
                    Product
                    <ChevronDownIcon :class="[open ? 'rotate-180' : '', 'h-5 w-5 flex-none']" aria-hidden="true" />
                  </DisclosureButton>
                  <DisclosurePanel class="mt-2 space-y-2">
                    <DisclosureButton v-for="item in [...products, ...callsToAction]" :key="item.name" as="a" :href="item.href" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{ item.name }}</DisclosureButton>
                  </DisclosurePanel>
                </Disclosure> -->
            <Link href="/" class="text-sm font-semibold flex-row flex justify-centerr space-x-3 leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <span><HomeIcon class="h-5 w-5 mr-1" aria-hidden="true" /></span> Home
        </Link>
          <Link href="/show" class="text-sm font-semibold flex-row flex space-x-3 leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <QuestionMarkCircleIcon class="h-5 w-5 mr-1 mt-0.5" aria-hidden="true" />
            Helps
        </Link>
          <Link href="#" class="text-sm font-semibold leading-6 text-gray-900 flex-row flex space-x-3 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1">
            <DocumentDuplicateIcon class="h-5 w-5 mr-1 mt-0.5" aria-hidden="true" />Docs
        </Link>
              </div>
              <div class="py-6">
                <Link href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white hover:bg-gray-50 dark:hover:bg-slate-500 rounded-lg px-4 py-1 flex space-x-4">Log in  <span class="ml-2" aria-hidden="true" >&rarr;</span></Link>
              </div>
            </div>
          </div>
        </DialogPanel>
      </Dialog>
    </header>
    <slot></slot>
  </template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
  data() {
    return {
      imagePath: import.meta.env.BASE_URL + 'images/logo-170x172.png',
    };
  },
});
</script>
  
  <script setup>
  import { ref, } from 'vue'
  import { Link } from '@inertiajs/vue3'
  import {
    Dialog,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
  } from '@headlessui/vue'
  import {
    ArrowPathIcon,
    Bars3Icon,
    ChartPieIcon,
    CursorArrowRaysIcon,
    FingerPrintIcon,
    SquaresPlusIcon,
    XMarkIcon,
  } from '@heroicons/vue/24/outline'
  import { ChevronDownIcon, PhoneIcon, PlayCircleIcon,HomeIcon, QuestionMarkCircleIcon, DocumentDuplicateIcon } from '@heroicons/vue/20/solid'
  
  const products = [
    { name: 'Analytics', description: 'Get a better understanding of your traffic', href: '#', icon: ChartPieIcon },
    { name: 'Engagement', description: 'Speak directly to your customers', href: '#', icon: CursorArrowRaysIcon },
    { name: 'Security', description: 'Your customers’ data will be safe and secure', href: '#', icon: FingerPrintIcon },
    { name: 'Integrations', description: 'Connect with third-party tools', href: '#', icon: SquaresPlusIcon },
    { name: 'Automations', description: 'Build strategic funnels that will convert', href: '#', icon: ArrowPathIcon },
  ]
  const callsToAction = [
    { name: 'Watch demo', href: '#', icon: PlayCircleIcon },
    { name: 'Contact sales', href: '#', icon: PhoneIcon },
  ]
  
  const mobileMenuOpen = ref(false)
  </script>