<template>
    <h1>{{titulo}}</h1>
    {{minutos}}:{{segundos}}:{{decimas}}<br>
    <button @click="arranca_para">{{ start_stop }}</button><br>
    <button @click="realizar_reset">Reset</button>
</template>

<script>
export default {
    name: "cronometro",
    props:["titulo"],
    data(){
        return{
            minutos: 0,
            segundos: 0,
            decimas: 0,
            start_stop: "Start",
            estado:false
        }
    },
    mounted() {
        setInterval(fn=>{
            if(this.estado == true) {
                this.decimas++;
                if (this.decimas == 10) {
                    this.decimas = 0;
                    this.segundos++;
                }
                if (this.segundos == 60) {
                    this.segundos = 0;
                    this.minutos++;
                }
                if (this.minutos == 5) {
                    this.minutos = 0;
                }
            }
        },100)
    },
    methods:{
        arranca_para:function (){
            if(this.estado == false){
            this.estado = true;
            this.start_stop = "Stop";
                this.decimas = 0;
                this.segundos = 0;
                this.minutos = 0;
        }else{
            this.estado = false;
            this.start_stop = "Start";
        }
        },
        realizar_reset:function (){
            this.minutos = 0;
            this.segundos = 0;
            this.decimas = 0;
            this.estado = false;
            this.start_stop = "Start";
        }
    }
}
</script>

<style scoped>

</style>
