<template>
    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre</th>
                            <th scope="col">SINOPSIS</th>
                            <th scope="col">Fecha de estreno</th>
                                <th scope="col">opciones</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="( movie , index) in movies" :key="movie.id">
                            <th scope="row">{{index + 1}}</th>
                            <td>{{movie.name}}</td>
                            <td>{{movie.synopsis}}</td>
                              <td>{{movie.release_date}}</td>

                            <td><a class="btn btn-danger" href="#" 
                            @click="deleteActor(movie.id)"
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
            movies:this.data
        }
    },
    methods:{
       async deleteActor(id){
            console.log(id)
         var response =  await  axios.delete(`/admin/movies/${id}`).catch(error =>console.log(error));
           if(response.data.msg == true){
               console.log('eliminado')
                this.movies = response.data.data;
            }
        }
    }

}
</script>

<style>

</style>