<template>
    <h1>Prescription</h1>
    <div v-if="prescription.data !== undefined">
        <p>{{ prescription.data.id }}</p>
        <p>{{ prescription.data.patient_name }}</p>
        <p>{{ prescription.data.patient_address }}</p>
        <p>{{ prescription.data.patient_phone }}</p>
        <p>{{ prescription.data.patient_email }}</p>
        <p>{{ prescription.data.medication_name }}</p>
        <p>{{ prescription.data.medication_frequency }} times a day</p>
        <p>{{ prescription.data.medication_dosage }} mg</p>
        <p>{{ prescription.data.medication_duration }} hours</p>
        <p>{{ prescription.data.medication_quantity }} pc</p>
        <p>{{ prescription.data.medication_refills }}</p>
        <p>{{ prescription.data.medication_notes }}</p>
        <p>dr {{ prescription.data.medication_prescriber }}</p>
    </div>
</template>

<script setup>
import {ref, defineExpose} from "vue";
import {useRoute} from "vue-router";

const prescription = ref({});
const route = useRoute();

const getPrescription = async () => {
    const response = await fetch(`/api/prescriptions/${route.params.id}`);
    prescription.value = await response.json();
};

getPrescription();

defineExpose({
    prescription
});
</script>
