<template>
    <nav class="navbar navbar-extend-sm navbar-dark bg-danger">
        <div class="container">
            <a href="#" class="navbar-brand">HOME</a>
            <a href="#" class="navbar-brand">CATALOG</a>
            <a href="#" class="navbar-brand">{{ message }}</a>
        </div>
    </nav>
</template>

<script>

export default{
    data(){
        return{ 
            message:"FAVORITE",
            link: "www.google.be"
        }
    }
}

</script>

<style scoped>
</style>