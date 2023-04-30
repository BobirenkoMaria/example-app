<script setup>
import { ref } from 'vue'
const user = ref({
    name: "",
    email: "",
    password: "",
    checkpass: "",
})
function CheckPass() {
    setTimeout(() => {
        if (user.value.checkpass === user.value.password) {
            alert("ok");
        } else {
            console.log("CheckedPass", user.value.checkpass)
            console.log("Password", user.value.password)
        }
    }, 100)

}
</script>
<template>
    <div class="flex justify-center gap-5 w-full pl-2 pr-2 mt-20">
        <div class="flex flex-col w-1/2 p-3">
            <label class="m-0 p-0 text-black">Имя</label>
            <input type="text" v-model="user.name"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none ">
        </div>
        <div class="flex flex-col  w-1/2 p-3 ">
            <label class="m-0 p-0 text-black">Почта</label>
            <input type="text" v-model="user.email"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none ">
        </div>
    </div>
    <div class="flex justify-center gap-5 w-full pl-2 pr-2 mt-1">
        <div class="flex flex-col w-1/2 p-3">
            <label class="m-0 p-0 text-black">Пароль</label>
            <input type="password" v-model="user.password"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none ">
        </div>
        <div class="flex flex-col  w-1/2 p-3 ">
            <label class="m-0 p-0 text-black">Повторите пароль</label>
            <input type="password" v-model="user.checkpass"
                class="block w-full h-10  p-4 bg-gray-50 border border-gray-100 text-gray-900 text-sm rounded-sm focus:ring-teal-500 focus:border-teal-500  focus:outline-none "
                @keypress="CheckPass">
        </div>
    </div>
    <div class="form-check flex justify-center gap-2 mt-4">
        <input class="form-check-input" type="checkbox" value="" id="">
        <label class="form-check-label" for="">
            Запомнить меня
        </label>
    </div>
    <div class="form-check flex justify-center gap-2 mt-4">
        <input class="form-check-input" type="checkbox" value="" id="">
        <label class="form-check-label" for="">
            Я согласен со всеми правилами
        </label>
    </div>
</template>
<style scoped></style>