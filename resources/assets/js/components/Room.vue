<template>
    <div class="room">
        <div class="header-room">
            <h1>{{ room.name }}</h1>
            <a href="">Localización</a>

            <div class="slide center">
                    <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
            </div>
        </div>

        <md-tabs md-fixed class="my-tabs">
            <md-tab id="precios" md-label="Precios">
                <div class="colum1">
                    <p>Capacidad Máxima</p>
                    <p>Disponibilidad</p>
                    <p>Otras Fechas</p>
                    <p>Calendario precios</p>
                </div>
                <div class="colum2">

                    <ul>
                        <li>Tarifa reembolsable<div>{{ room.price_norefundable}} €</div><div>Más</div></li>
                        <li>Tarifa No reembolsable<div>{{ room.price_refundable}} €</div><div>Más</div></li>
                    </ul>

                    <div>Regimen</div>

                </div>
            </md-tab>

            <md-tab id="info" md-label="Info">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas amet cum vitae, omnis! Illum quas voluptatem, expedita iste, dicta ipsum ea veniam dolore in, quod saepe reiciendis nihil.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas amet cum vitae, omnis! Illum quas voluptatem, expedita iste, dicta ipsum ea veniam dolore in, quod saepe reiciendis nihil.</p>
            </md-tab>

            <md-tab id="servicios" md-label="Servicios">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolorum quas.</p>
            </md-tab>
        </md-tabs>




    </div>
</template>
<style>

    .room {
        margin: 60px 0 60px 0;
        border: rgba(128, 128, 128, 0.71) 1px solid;
        border-radius: 10px;
        width: 80%;
    }

    .my-tabs {
        display: flex;
        flex-direction: column-reverse;
    }

    .header-room {
        align-items: center;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .tab-price {
        display: flex;
        justify-content: space-around;
    }

</style>
<script>

    export default{
        data(){
            return{

            }
        },
        props: {
            room: { required: true },
        },
    }

</script>
