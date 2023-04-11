<template>
    <div class="w-[200px] transition-all bg-indigo-700 text-white px-2 py-4 ">
        <router-link :to="{name: 'app.dashboard'}"
                     class='flex items-center p-2 rounded transition-colors hover:bg-black/30'>
            <span class="mr-2 text-gray-300">
<HomeIcon class="w-5"/>
            </span>
            <span class="text-xs font-light">
                Dashboard
            </span>
        </router-link>
        <router-link :to="{name: 'app.products'}"
                     class='flex items-center p-2 rounded transition-colors hover:bg-black/30'>
            <span class="mr-2 text-gray-300">
<ViewColumnsIcon class="w-5"/>
            </span>
            <span class="text-xs font-light">
                Products
            </span>
        </router-link>
        <router-link :to="{name: 'app.dashboard'}"
                     class='flex items-center p-2 rounded transition-colors hover:bg-black/30'>
            <span class="mr-2 text-gray-300">
<UserIcon class="w-5"/>
            </span>
            <span class="text-xs font-light">
                Users
            </span>
        </router-link>
        <router-link :to="{name: 'app.dashboard'}"
                     class='flex items-center p-2 rounded transition-colors hover:bg-black/30'>
            <span class="mr-2 text-gray-300">
<ChartBarIcon class="w-5"/>
            </span>
            <span class="text-xs font-light">
                Reports
            </span>
        </router-link>
    </div>
</template>

<script setup>

import {ChartBarIcon, HomeIcon, UserIcon, ViewColumnsIcon} from '@heroicons/vue/24/outline'
</script>

<style scoped>

</style>
