<script >
import axios from 'axios';

export default{
    data() {
      return {
        //array vuoto da pienare con la chiamata axios
        tasks: [],

        //struttura oggetto per creare nuove stask
        newTask: {
          title: '',
          status: false,
        }
      }
    },

    methods: {
      
    },

    //Chiamata axios 
    mounted() {
    
    axios.get('http://localhost:8888/Boolean/php-todo-list-json/backend/index.php')
         .then(response => {
            console.log(this.students = response.data);
         });
  }
  }

  
  
</script>

<template>
<div class="container">
  <div class="row">
    <div class="col text-center my-5">
      <h1>
        Todo List
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <ul class="list-group list-group-flush mb-5">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" name="diane">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
      </div>
    </div>
  </div>
</div>
  
</template>

<style scoped>
</style>
