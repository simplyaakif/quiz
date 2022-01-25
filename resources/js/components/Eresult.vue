<template>
    <div>
        Hello World
        <vue-table class="box is-paddingless raises-on-hover is-rounded"
                   path="/initTable"
                   id="example"/>
    </div>
</template>

<script>
    import {VueTable} from '@enso-ui/tables/bulma';

    export default {
        name: "Eresult.vue"
    }
</script>

<style scoped>

</style>
