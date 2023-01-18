<template>
    <div>

        <data-table
            :columns="columns"
            url="/dental/datatablePatient">
        </data-table>
                <form >
                    <input type="text" v-model="pat_name"/>
                    <button @click.prevent="posty()">
                        get patient name
                    </button>
                </form>
    </div>
</template>

<script>
import { TableComponent, TableColumn } from 'vue-table-component';


export default {
name: "patient",
    components:{
     'table-component':TableComponent,
        'table-column':TableColumn
    },
    data(){
    return {
        columns: [
            {
                label: 'ID',
                name: 'id',
                orderable: true,
            },
            {
                label: 'Name',
                name: 'pat_name',
                orderable: true,
            },
            {
                label: 'Action',
                name: 'action',
                orderable: true,
            },
        ],
        patient:[],
        pat_name:'',
    }
    },
    methods:{
        async fetchData({ page, filter, sort }) {
            const response = await axios.get('/dental/datatablePatient', { page });

            // An object that has a `data` and an optional `pagination` property
            return response;
        },
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
