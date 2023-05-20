
<template>
    <footer class="w-full bg-slate-400">
        <div  class="my-2">
            <!-- <img :src="imagePath" alt=""> -->
        </div>
        <div class="text-center font-medium text-blue-500">
            <span> Copyright &copy; 2020 - {{Date.getYear()}} </span>
            <span class="ml-2">The University of Dodoma </span>
        </div>
    </footer>
    <!-- <slot></slot> -->
</template>

<script>
export default {
  name: 'Footer',
  data() {
    return {
      imagePath: import.meta.env.BASE_URL + 'images/footer-image.jpg',
    };
  },
};
</script>

