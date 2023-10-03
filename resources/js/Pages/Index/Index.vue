<template>
    <div>
      <form @submit.prevent="submitForm">
        <div>
          <label for="quality">Quality:</label>
          <select v-model="formData.quality">
            <!-- Define options for the () dropdown -->
            <!-- Example options, you can customize as needed -->
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <!-- Add more options as necessary -->
          </select>
        </div>
        
        <div>
          <label for="schedule">Schedule:</label>
          <select v-model="formData.schedule">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          <label for="contribution">Contribution:</label>
          <select v-model="formData.contribution">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          <label for="difficulty">Difficulty:</label>
          <select v-model="formData.difficulty">
          
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            
          </select>
          <label for="reporting">Reporting:</label>
          <select v-model="formData.reporting">
         
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            
          </select>
          <label for="technical_capability">Technical Capability:</label>
          <select v-model="formData.technical_capability">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          <label for="sense_of_ownership">Sense of Ownership:</label>
          <select v-model="formData.sense_of_ownership">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            
          </select>
          <label for="teamwork">Teamwork:</label>
          <select v-model="formData.teamwork">
          
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          <label for="leadership">Leadership:</label>
          <select v-model="formData.leadership">
           
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           
          </select>
          <label for="time_commitment">Time commitment:</label>
          <select v-model="formData.time_commitment">

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <label for="attendance">Attendance:</label>
          <select v-model="formData.attendance">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
  
       
  
        <button type="submit">Submit</button>
      </form>
    </div>
  </template>

<script>
export default {
  data() {
    return {
      formData: {
        quality: null, // Initialize dropdown values as null
        schedule: null,
        contribution: null,
        difficulty: null,
        reporting: null,
        technical_capability: null,
        sense_of_ownership: null,
        teamwork: null,
        leadership: null,
        time_commitment: null,
        attendance: null,
      },
    };
  },
  methods: {
    submitForm() {
      // Send the formData to your backend API using Axios or another HTTP library
      // You can access this.formData to get the selected values
    },
  },
};
</script>