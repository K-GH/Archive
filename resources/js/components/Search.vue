<template>
    <div class="container">
        <div class="card-body row no-gutters align-items-center">
            <div class="col-auto">
                <i class="fas fa-search h4 text-body"></i>
            </div>

            <div class="col">
              <input type="text" class="form-control form-control-lg form-control-borderless" name="" value="" placeholder="Search topics or keywords">

            </div>

            <div class="col-auto">
              <input type="submit" class="btn btn-lg btn-success" name="" value="search">

            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
