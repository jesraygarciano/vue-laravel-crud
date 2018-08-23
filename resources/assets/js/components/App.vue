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
                window.axios.get('/api/cruds').then(({ data }) => {
                // console.log(data)
                data.forEach (crud => {
                    this.cruds.push(new Crud(crud));
                });
            });
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

    /*
    Sample response:

    [
    {
        "id": 0,
        "name": "ijjpfodc",
        "color": "green",
        "created_at": "2018-02-02 09:15:24",
        "updated_at": "2018-02-02 09:24:12"
    },
    {
        "id": 1,
        "name": "wjwxecrf",
        "color": "red",
        "created_at": "2018-02-03 09:26:31",
        "updated_at": "2018-02-03 09:26:31"
    }
    ]
    */

</script>

