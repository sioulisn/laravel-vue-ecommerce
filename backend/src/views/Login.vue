<template>
    <GuestLayout title="Sign in to your account">


        <form @submit.prevent="login" class="mt-8 space-y-6" method="POST">
            <div v-if="errorMsg" class="flex items-center justify-between py-3 px-5 bg-red-500 text-white rounded">
                {{errorMsg}}
                <span @click="errorMsg= ''"
                      class="w-8 h-8  flex items-center justify-center rounded-full transition-colors cursor-pointer hover:bg-black/20">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>

                </span>
            </div>
            <input name="remember" type="hidden" value="true"/>
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label class="sr-only" for="email-address">Email address</label>
                    <input id="email-address" autocomplete="email" v-model="user.email"
                           class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           name="email" placeholder="Email address"
                           required=""
                           type="email"/>
                </div>
                <div>
                    <label class="sr-only" for="password">Password</label>
                    <input id="password" autocomplete="current-password" v-model="user.password"
                           class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                           name="password" placeholder="Password"
                           required=""
                           type="password"/>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" v-model="user.remember"
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
                    :disabled="loading"
                    class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    :class="{
                        'cursor-not-allowed': loading,
                        'hover:bg-indigo-500': loading,
                    }"
                    type="submit">
                    <svg v-if="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
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
import {ref} from "vue";
import store from "../store/index.js";
import router from "../router/index.js";

let loading = ref(false);
let errorMsg = ref('');

const user = {
    email: '',
    password: '',
    remember: false
}

function login() {
    loading.value = true;
    store.dispatch('login', user)
        .then(() => {
            loading.value = false;
            router.push({name: 'app.dashboard'})
        })
        .catch(({response}) => {
            loading.value = false;
            errorMsg.value = response.data.message;
        })
}

</script>

<style scoped>

</style>
