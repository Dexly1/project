<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Номер</th>
                        <th scope="col">Имя</th>
        <!--                <th scope="col">Фамилия</th>-->
        <!--                <th scope="col">Должность</th>-->
        <!--                <th scope="col">Дата</th>-->
        <!--                <th scope="col">ЗП</th>-->
        <!--                <th scope="col">Начальник</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="url in urldata">
                        <th scope="row">{{url.title}}</th>
                        <th scope="row">{{url.url}}</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</template>

<script>
export default {

    props: [
        'urldata'
    ],
    mounted() {
        this.update();
    },
    methods: {
        update() {
            console.log(this.urldata);
            console.log("asd");
        }
    }
}
</script>

<style scoped>

</style>
