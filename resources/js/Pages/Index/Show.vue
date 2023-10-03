<template>
    <div>
      <h2>Create a New Member</h2>
      <form @submit.prevent="submitMember">
        <div>
          <label for="memberName">Member Name:</label>
          <input type="text" id="memberName" v-model="formData.memberName" required />
        </div>
        <div>
          <label for="Position">Position:</label>
          <input type="text" id="Position" v-model="formData.Position" required />
        </div>
        <div>
          <label for="BU">BU:</label>
          <input type="text" id="BU" v-model="formData.BU" required />
        </div>
        <div>
          <label for="Batch">Batch:</label>
          <input type="text" id="Batch" v-model="formData.Batch" required />
        </div>
        <button type="submit">Save Member</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  export default {
    data() {
      return {
        formData: {
          memberName: '',
          Position: '',
          BU: '',
          Batch: '',
        },
      };
    },
    methods: {
    submitMember() {
   
      axios
        .post('/api/members', this.formData)
        .then((response) => {
          // Handle success
          console.log(response.data);
          
          this.formData = {
            memberName: '',
            Position: '',
            BU: '',
            Batch: '',
          };
        })
        .catch((error) => {
          // Handle errors
          console.error(error);
        });
    },
  },
};
  </script>