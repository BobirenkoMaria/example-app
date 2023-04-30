import { ref } from 'vue'
import { defineStore } from 'pinia'
import axios from 'axios'

export const useCounterStore = defineStore('counter', () => {
    const log = ref()
    const sign = ref()

    function Validate(type,el){
        if(type === 'log'){
            el.value.email != undefined || null ? console.log("ok") : console.error("email undefined"); 
            el.value.password != undefined || null ? console.log("ok") : console.error("password undefined"); 
        }else{
            el.value.name != undefined || null ? console.log("ok") : console.error("name undefined"); 
            el.value.email != undefined || null ? console.log("ok") : console.error("email undefined"); 
            el.value.password != undefined || null ? console.log("ok") : console.error("password undefined"); 
        }
    }

    function LogIn(user) {
        Validate("log",user)
        axios.post("#",user)
    }
    function SignUp(user){
        Validate("Sign",user)
        axios.post("#",user)
    }
    return { log, sign, LogIn , SignUp }
})
