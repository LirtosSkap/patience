<template>
    <div class='row'>
        <h1>My Tasks</h1>

        <h4 data-content="edit">New Task</h4>
        <form action="#" @submit.prevent="edit ? updateTask(task.id) : createTask()" >
            <div class="input-group">
                <input v-model="task.body" v-el:taskinput type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                <button v-show="!edit" type="submit" class="btn btn-primary">New Task</button>
                <button v-show="edit" type="submit" class="btn btn-primary">Edit Task</button>
            </span>
            </div>
        </form>

        <h4>All Tasks</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no tasks yet!</li>
            <li class="list-group-item" v-for="(task, index) in list">
                {{ task.body }}
                <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
                <button @click="showTask(task.id)" class="btn btn-primary btn-xs pull-right">Edit</button>
            </li>
        </ul>
    </div>
</template>



<script>
    export default {
        data() {
            return {
                list: [],
                task: {
                    id: '',
                    body: ''
                },
                edit: false,
            };
        },

        created() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList() {
                axios.get('tasks').then((res) => {
                    this.list = res.data;
                });
            },

            createTask() {
                axios.post('tasks', this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },

            deleteTask(id) {
                axios.delete('tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },

            updateTask: function(id) {
                axios.patch('tasks/' + id, this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },

            showTask: function(id) {
                axios.get('tasks/' + id).then((res) => {
                    this.task.id = res.data.id;
                    this.task.body = res.data.body;
                    this.edit = true;
                    this.$els.taskinput.focus();
                });
            },
        }
    }
</script>
