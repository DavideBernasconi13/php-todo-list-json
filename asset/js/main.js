import { todolist } from "./data.js";

const { createApp } = Vue;

createApp({
    data() {
        return {
            todolist: todolist
        }
    },
    methods: {
        underline(id) {
            const item = this.todolist.find((el) => {
                return el.id === id;
            })
            //console.log(item);
            if (item) {
                item.done = !item.done
            }
        },
        removeItem(id) {
            const i = this.todolist.findIndex((el) => el.id === id);
            console.log(i);
            if (i !== -1)
                this.todolist.splice(i, 1)
        },
        addItem() {
            let newObj = {
                id: null, //generare id
                text: this.itemText, // prendere valore
                done: false
            }
            let nextId = 0;
            this.todolist.forEach((el) => {
                if (nextId < el.id) {
                    nextId = el.id
                }
            })

            newObj.id = nextId + 1;
            //aggiungo in cima alla LISTA -> metodo array
            //this.todolist.unshift(newObj);
            this.todolist.push(newObj);
            //ripulisco itemText
            this.itemText = '';
            console.log(this.todolist);
        }

    },
    mounted() {
        console.log(todolist)
    }
}).mount('#app');
