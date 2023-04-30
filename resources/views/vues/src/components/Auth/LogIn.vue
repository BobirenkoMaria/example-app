<script setup>
import { ref } from 'vue';

const user = ref({
    email: "",
    password: "",
    remember:false
})

</script>
<template>
    <div class="flex justify-center gap-5 w-full pl-2 pr-2 mt-20">
        <div class="flex flex-col w-1/2 p-3">
            <label class="m-0 p-0 text-black">Почта</label>
            <input type="text"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none "
                v-model="user.email">
        </div>
    </div>
    <div class="flex justify-center gap-5 w-full pl-2 pr-2 mt-1">
        <div class="flex flex-col w-1/2 p-3">
            <label class="m-0 p-0 text-black">Пароль</label>
            <input type="password"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none "
                v-model="user.password">
        </div>
    </div>
    <div class="form-check flex justify-center gap-2 mt-2">
        <input class="form-check-input" type="checkbox" value="" id="" v-model="user.remember">
        <label class="form-check-label" for="">
            Запомнить меня
        </label>
    </div>
    <div class="form-check flex justify-center gap-2 mt-2">
        <a href="#" class="text-md text-teal-400">Забыл пароль?</a>
    </div>
</template>
<style scoped></style>
