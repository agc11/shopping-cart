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
                rooms: [
                    { name: 'room 1' , price_norefundable: 5.00, price_refundable: 3.00, services: 'services room 1'},
                    { name: 'room 2' , price_norefundable: 10.00, price_refundable: 6.00, services: 'services room 2'},
                    { name: 'room 3' , price_norefundable: 20.00, price_refundable: 12.00, services: 'services room 3'},
                    { name: 'room 4' , price_norefundable: 40.00, price_refundable: 24.00, services: 'services room 4'},
                ],
            }
        },
    }

</script>
