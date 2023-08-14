<template>
    <h1>Prescriptions</h1>

    <div>
        <ul>
            <li v-for="prescription in prescriptions.data" :key="prescription.id">
                <RouterLink :to="'/prescriptions/' + prescription.id">
                    {{ prescription.medication_name}}, {{ prescription.medication_frequency}} times a day, {{ prescription.medication_dosage}} mg
                </RouterLink>
            </li>
        </ul>
    </div>

    <Bootstrap5Pagination :data="prescriptions" @pagination-change-page="getRecipes"></Bootstrap5Pagination>
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
