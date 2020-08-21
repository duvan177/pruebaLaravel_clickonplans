<template>
    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">opciones</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="( actor , index) in actors" :key="actor.id">
                            <th scope="row">{{index + 1}}</th>
                            <td>{{actor.name}}</td>
                            <td><a class="btn btn-danger" href="#" 
                            @click="deleteActor(actor.id)"
                            role="button">Eliminar</a></td>
                           
                          </tr>
                      
                        </tbody>
                      </table>
</template>

<script>
export default {
    props:['data'],
    data(){
        return{
            actors:this.data
        }
    },
    methods:{
       async deleteActor(id){
            console.log(id)
         var response =  await  axios.delete(`/admin/actors/${id}`).catch(error =>console.log(error));
           if(response.data.msg == true){
               console.log('eliminado')
                this.actors = response.data.data;
            }
        }
    }

}
</script>

<style>

</style>