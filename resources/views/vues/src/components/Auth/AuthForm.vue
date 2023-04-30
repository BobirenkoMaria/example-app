<script setup>
import SignUp from './SignUp.vue'
import LogIn from './LogIn.vue'
import { ref } from 'vue'

const log = ref(true);
const btn = ref("Войти")

function ShowLog() {
    log.value == true ? log.value = false  : log.value = true;
    log.value == true ? btn.value = "Войти" : btn.value = "Отправить"
}
function Dash(){
    window.location.assign('/dash')
}
</script>
<template>
    <div class="w-1/4 min-w-[600px] bg-white h-auto m-20 rounded-sm shadow-2xl">
        <div class="flex justify-center mt-24 gap-5">
            <h2 class=" text-3xl text-teal-400  transition-all  hover:-translate-y-1 cursor-pointer" @click="ShowLog">Log In</h2>
            <h2 class=" text-3xl text-teal-400  transition-all  hover:-translate-y-1 cursor-pointer" @click="ShowLog">SignUp</h2>
        </div>
        <SignUp v-if="!log" />
        <LogIn v-if="log" />
        <div class="flex justify-center w-full mt-1">
            <button
                class=" p-3 bg-teal-200 shadow-md mt-10 hover:scale-105 hover:shadow-xl transition-all" @click="Dash">{{ btn }}</button>
        </div>
    </div>
</template>
<style scoped></style>