<template>
    <div>
      <h2>Create a New Project</h2>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="ProjectName">Project Name:</label>
          <input v-model="projectName" type="text" class="form-control" id="ProjectName" required>
        </div>
        <div class="form-group">
          <label for="Evaluator">Evaluator:</label>
          <input v-model="evaluator" type="text" class="form-control" id="Evaluator" required>
        </div>
        <div class="form-group">
          <label for="EvalPeriod">Evaluation Period:</label>
          <input v-model="evalPeriod" type="text" class="form-control" id="EvalPeriod" required>
        </div>
        <div class="form-group">
          <label for="WorkLoc">Work Location:</label>
          <input v-model="workLoc" type="text" class="form-control" id="WorkLoc" required>
        </div>
        <div class="form-group">
          <label for="EvalDate">Evaluation Date:</label>
          <input v-model="evalDate" type="date" class="form-control" id="EvalDate" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Project</button>
      </form>
    </div>
  </template>
  
  <script>
    import axios from 'axios';

  export default {
    data() {
      return {
        projectName: '',
        evaluator: '',
        evalPeriod: '',
        workLoc: '',
        evalDate: '',
      };
    },
    methods: {
      submitForm() {
        
        axios.post('/api/projects', {
          ProjectName: this.projectName,
          Evaluator: this.evaluator,
          EvalPeriod: this.evalPeriod,
          WorkLoc: this.workLoc,
          EvalDate: this.evalDate,
        })
        .then((response) => {
          
          console.log('Project created successfully');
          
          this.projectName = '';
          this.evaluator = '';
          this.evalPeriod = '';
          this.workLoc = '';
          this.evalDate = '';
        })
        .catch((error) => {
          
          console.error('Error creating project', error);
        });
      },
    },
  };
  </script>