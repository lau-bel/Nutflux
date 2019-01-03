<template>
<div>
    <div class="container-fluid">
    <h2> TEST </h2>
    <input type="text" v-model="name">
    <input type="checkbox" v-model="checkbox">
    <p>Bonjour {{name}}</p>
    </div>
</div>
</template>

<script>
export default{
    data(){
        return{ 
            name:"Stev0",
            checkbox:true,
            tableau:[true, "testt", 2]
        }
    }
}
</script>

<style scoped>
</style>