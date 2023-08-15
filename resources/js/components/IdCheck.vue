<template>
    <div class="row">
        <h1 class="text-center my-5">Id Check</h1>
    </div>
    <div class="row justify-content-center">
        <form id="form" @submit.prevent="checkId" class="mt-4 col-12 col-md-6 my-auto">
            <div class="mb-4">
                <label for="idCode" class="my-2">Please enter a personal ID code for validation</label>
                <input type="text" id="idCode" v-model="id" placeholder="ID code" class="form-control">
            </div>
            <div class="mb-4 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="alert alert-success text-center col-12 col-md-6" v-if="success">
            <h4 class="alert-heading">Id code is correct!</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="alert alert-danger text-center col-12 col-md-6" v-if="errors.length > 0">
            <h4 class="alert-heading pb-2">Some errors in the code you entered:</h4>
            <hr />
            <span class="d-block m-2" v-for="error in errors" :key="error">{{ error }}</span>
        </div>
    </div>
</template>
<script setup>
import {ref} from "vue";
import axios from "axios";

const id = ref("");
const errors = ref([]);
const success = ref(false);

const checkId = () => {
    success.value = false;
    errors.value = [];
    axios.post('/api/id-check', {
        id: id.value
    }).then(() => {
        success.value = true;
    }).catch((error) => {
        errors.value = error.response.data.errors.id;
    });
};
</script>
