<template>
    <div class="room">
        <h1>{{ room.name }}</h1>
        <a href="">Localización</a>

        <div class="slide">
                <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
        </div>
        <div class="tabs is-toggle is-fullwidth is-large">
            <ul>
                <li class="is-active">
                    <a>
                        <span class="icon is-small"><i class="fa fa-eur"></i></span>
                        <span>Precios</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fa fa-info"></i></span>
                        <span>Info</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fa fa-list"></i></span>
                        <span>Servicios</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="content-room">

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
        </div>

    </div>
</template>
<style>

    .room {
        margin: 60px 0 60px 0;
        border: rgba(128, 128, 128, 0.71) 1px solid;
        border-radius: 10px;
    }

    .content li+li {
        margin-top: 0 !important;
    }

    .content-room {
        display: flex;
        justify-content: space-around;
    }
    ul li {
        list-style: none;
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
