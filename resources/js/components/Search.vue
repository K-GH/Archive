<template>
    <div class="container">
        <div class="card-body row no-gutters align-items-center">
            <div class="col-auto">
                <i class="fas fa-search h4 text-body"></i>
            </div>

            <div class="col">
              <input type="text" class="form-control form-control-lg form-control-borderless"  placeholder="Search topics or keywords" v-model="key">

            </div>

            <div class="col-auto">
              <input type="submit" class="btn btn-lg btn-success"  value="search" @click="getResult(key)">
            </div>

            <br>


        </div>

          <div class="alert alert-dismissible alert-success"   v-for="result in results" :key="result.id">
            <div v-show="result.id">
            <pre><a v-bind:href="'/folders/'+ result.id"> Click here : {{result.name}}</a></pre>
            <p> {{result.description}} </p>
          </div>
        </div>

    </div>
</template>

<script>
    export default {
        data(){
          return {
            key: '',
            /*
            results:{
              id:'',
              name:'',
              description:'',

            },*/
            results:{},
            message: ''
          };
        },
        mounted() {
            console.log('Component mounted.')


        },
        methods:{
        /*  search(){
            //this.message=this.key;
            this.showResult(this.key);
            this.message=name;
          },*/
          getResult: function(key){
           let self=this;
           axios.get('api/search/'+key)
              .then(function(response){
                  console.log(response.data);
                  self.results=response.data;
                  //console.log(response.data.id);
                  /*self.results.name=response.data[0].name;
                  self.results.id=response.data[0].id;
                  self.results.description=response.data[0].description;*/
                  //console.log(self.results.id);


              }).catch((error)=>{
                    console.log(error);
                })

         }

        }
    }
</script>
