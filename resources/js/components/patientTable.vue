<template>
    <div>
        <form >
            <input type="text" v-model="pat_name"/>
            <button @click.prevent="posty()">
                get patient name
            </button>
        </form>
    </div>
</template>

<script>
export default {
    name: "patient",
    data(){
        return {
            patient:[],
            pat_name:'',
        }
    },
    methods:{
        getPatientInfo(){
            console.log(this.pat_name);
        },
        posty() {

            axios.post('/patient', {
                name:this.pat_name
            }).then(response => {

                }
                // this.$router.push({name: 'home'})
                // console.log(response.data)
            ).catch(error => console.log(error))
                .finally(() => this.loading = false)
        },
    },
    watch:{

        pat_name:function(value){
            console.log(value);
        }
    }
}
</script>

<style scoped>

</style>
