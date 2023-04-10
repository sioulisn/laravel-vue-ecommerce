<template>
    <div class="flex min-h-full">
        <!--        Sidebar-->
        <Sidebar/>
        <!--        /Sidebar end-->
        <div class="flex-1">
            <header class="h-8 shadow bg-white">
                Header
            </header>
            <!--            Main content-->
            <main>
                <router-view></router-view>
            </main>
            <!--            Main content END-->
        </div>
    </div>
</template>

<script setup>
import Sidebar from "./Sidebar.vue";

const {title} = defineProps({
    title: {
        type: String,
    }

})

</script>

<style scoped>

</style>
