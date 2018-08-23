<template>
    <div id="app">
        <div class="heading">
            <h1>Cruds</h1>
        </div>

        <crud-component
        v-for= "crud in cruds"
        v-bind= "crud"
        :key="crud.id"
        @update="update"
        @delete="del"
        >
        </crud-component>
        <div>
            <button @click="create()">Add</button>
        </div>
    </div>
</template>
<script>
    function Crud({id, color}) {
        this.id = id;
        this.color = color;
        this.name = name;
    }

    import CrudComponent from './CrudComponent.vue';

    export default{
        data() {
            return {
                cruds: []
            }
        },

        methods: {
            create() {
                // Todo
            },
            read() {
                // Todo
            },
            update(id, color) {
                // To do
            },
            del(id) {
                // Todo
            }
        },

        components: {
            CrudComponent
        }
    }
</script>