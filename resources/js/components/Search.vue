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
              <input type="submit" class="btn btn-lg btn-success"  value="search" @click="search">
            </div>

            <br>


        </div>
        <div class="alert alert-dismissible alert-success"><pre>{{message}}</pre></div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
            key: '',
            message: ''
          };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          search(){
            this.message=this.key;
          },

        }
    }
</script>
