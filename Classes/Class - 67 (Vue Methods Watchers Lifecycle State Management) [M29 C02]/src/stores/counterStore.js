import {defineStore} from "pinia";

export const useCounterStore = defineStore('counter',{
    state:()=>({
        num1: 0,
        num2: 0
    }),
    actions:{
        Plus(){
          this.num1 +=1;
          this.num2 -=1;
        },
        Minus(){
            this.num1 -=1;
            this.num2 +=1;
        },
    },
});