<template>

    <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Request new password</h2>

            </div>
            <form action="#" class="mt-8 space-y-6" method="POST">
                <input name="remember" type="hidden" value="true"/>
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label class="sr-only" for="email-address">Email address</label>
                        <input id="email-address" autocomplete="email"
                               class="relative block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               name="email" placeholder="Email address"
                               required=""
                               type="email"/>
                    </div>
                </div>

                <div class="flex items-center justify-between">

                    <div class="text-sm">
                        <router-link :to="{name: 'login'}" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Remember your
                            password?
                        </router-link>
                    </div>
                </div>

                <div>
                    <button
                        class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        type="submit">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <LockClosedIcon aria-hidden="true" class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"/>
            </span>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import {LockClosedIcon} from '@heroicons/vue/20/solid'
</script>

<style scoped>

</style>
