<template>
    <GuestLayout title="Sign in to your account">


        <form action="#" class="mt-8 space-y-6" method="POST">
            <input name="remember" type="hidden" value="true"/>
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label class="sr-only" for="email-address">Email address</label>
                    <input id="email-address" autocomplete="email"
                           class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           name="email" placeholder="Email address"
                           required=""
                           type="email"/>
                </div>
                <div>
                    <label class="sr-only" for="password">Password</label>
                    <input id="password" autocomplete="current-password"
                           class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           name="password" placeholder="Password"
                           required=""
                           type="password"/>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me"
                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                           name="remember-me"
                           type="checkbox"/>
                    <label class="ml-2 block text-sm text-gray-900" for="remember-me">Remember me</label>
                </div>

                <div class="text-sm">
                    <router-link :to="{name: 'requestPassword'}"
                                 class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?
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
                    Sign in
                </button>
            </div>
        </form>
    </GuestLayout>
</template>

<script setup>
import {LockClosedIcon} from "@heroicons/vue/20/solid/index.js";
import GuestLayout from "../components/GuestLayout.vue";
</script>

<style scoped>

</style>
