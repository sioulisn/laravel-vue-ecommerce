<template>
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-3xl font-semibold">Products</h1>
        <button type="submit"
                class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
            Add New Product
        </button>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="flex item-center">
            <span class="whitespace-nowrap mr-3">Per Page</span>
            <select @change="getProducts(null)" v-model="perPage"
                    class="appearance-none relative block w-24 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div>

            <input v-model="search" @change="getProducts(null)"
                   class="appearance-none relative block w-48 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                   placeholder="Type to Search products">
        </div>
        <Spinner v-if="products.loading" />
        <template v-else>
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border-b-2 p-2 tect-left">ID</th>
                    <th class="border-b-2 p-2 tect-left">Image</th>
                    <th class="border-b-2 p-2 tect-left">Title</th>
                    <th class="border-b-2 p-2 tect-left">Price</th>
                    <th class="border-b-2 p-2 tect-left">Last Updated At</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product of products.data">
                    <td class="border-b p-2">{{product.id}}</td>
                    <td class="border-b p-2">
                        <img :src="product.image" class="w-16" :alt="product.title"></td>
                    <td class="border-b p-2 max-w-[200px] whitespace-nowrap overflow-hidden text-ellipses">{{product.title}}</td>
                    <td class="border-b p-2">{{product.price}}</td>
                    <td class="border-b p-2">{{product.updated_at}}</td>

                </tr>
                </tbody>

            </table>
        </template>
    </div>
</template>

<script setup>

import Spinner from "../components/core/Spinner.vue";
</script>

<style scoped>

</style>
