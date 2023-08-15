<template>
    <div class="row">
        <h1 class="text-center my-5">Prescriptions</h1>
    </div>

    <div class="row justify-content-center">
        <ul class="col-12 col-md-6 text-center list-group mb-5">
            <li v-for="prescription in prescriptions.data" :key="prescription.id" class="list-group-item">
                <RouterLink :to="'/prescriptions/' + prescription.id">
                    {{ prescription.medication_name}}, {{ prescription.medication_frequency}} times a day, {{ prescription.medication_dosage}} mg
                </RouterLink>
            </li>
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <Bootstrap5Pagination :data="prescriptions" @pagination-change-page="getRecipes"></Bootstrap5Pagination>
        </div>
    </div>
</template>
<script setup>
import { RouterLink} from "vue-router";
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
import { ref } from "vue";

const prescriptions = ref({});

const getRecipes = async (page = 1) => {
    const response = await fetch(`/api/prescriptions?page=${page}`);
    prescriptions.value = await response.json();
};

getRecipes();

</script>
