<template>
    <div>
        <div v-for="room in rooms" >
            <room :room="room"></room>
        </div>
    </div>
</template>

<style>

</style>

<script>

    export default{
        data(){
            return{

            }
        },
        props: {
            rooms: { required: true }
        },
    }

</script>
