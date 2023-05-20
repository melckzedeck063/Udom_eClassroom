<template>
    <div class="bg-white py-20 sm:py-28 dark:bg-slate-800">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white sm:text-4xl">The  University  Of  Dodoma</p>
          <h2 class="font-semibold leading-7 text-blue-500 text-2xl">E-learning Platform</h2>
          <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-200">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl ">
          <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
            <div v-for="feature in features" :key="feature.name" class="relative pl-16 shadow-xl my-1 bg-slate-200 p-1 dark:bg-slate-700 rounded-lg">
              <dt class="text-base font-semibold leading-7 text-gray-900 dark:text-white">
                <div class="absolute left-0.5 top-0.5 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-500">
                  <component :is="feature.icon" class="h-6 w-6 text-white" aria-hidden="true" />
                </div>
                {{ feature.name }}
              </dt>
              <dd class="mt-2 text-base leading-7 text-gray-600 dark:text-gray-200">{{ feature.description }}</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import {LockClosedIcon, ChartBarSquareIcon,ChatBubbleBottomCenterIcon, ChatBubbleBottomCenterTextIcon } from '@heroicons/vue/24/outline'
  import {BookOpenIcon,ComputerDesktopIcon, PencilIcon, ChartBarIcon } from '@heroicons/vue/24/solid'

  
  const features = [
    {
      name: 'Course Monitoring and Progress Measuring',
      description:
        'Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.',
      icon: ChartBarSquareIcon,
    },
    {
      name: 'Content Accessibility and Consistency',
      description:
        'Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.',
      icon: BookOpenIcon,
    },
    {
      name: 'Virtual Classrooms',
      description:
        'Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.',
      icon: ComputerDesktopIcon,
    },
    {
      name: 'Continuous Assessments',
      description:
        'Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.',
      icon: PencilIcon,
    },
    {
      name: 'Discussion Forums',
      description:
        'Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.',
      icon: ChatBubbleBottomCenterTextIcon,
    },
  ]
  </script>



<script>
import MainLayout from '../../Layout/MainLayout.vue';
import LandingHeader from '../../Layout/LandingHeader.vue';

 export default {
    layout: LandingHeader,
    
}
</script>