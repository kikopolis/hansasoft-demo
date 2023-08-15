<template>
    <div class="row">
        <h1 class="text-center my-5">Prescription</h1>
    </div>
    <div v-if="prescription.data !== undefined" class="row justify-content-center">
        <ul class="col-12 col-md-6 text-start list-group pe-0">
            <li class="list-group-item">
                <span class="text-muted">Prescription ID</span> - <span>{{ prescription.data.id }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Patient Name</span> - <span>{{ prescription.data.patient_name }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Patient Address</span> - <span>{{ prescription.data.patient_address }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Patient Phone</span> - <span>{{ prescription.data.patient_phone }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Patient Email</span> - <span>{{ prescription.data.patient_email }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Name</span> - <span>{{ prescription.data.medication_name }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Frequency</span> - <span>{{ prescription.data.medication_frequency }} times a day</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Dosage</span> - <span>{{ prescription.data.medication_dosage }} mg</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Duration</span> - <span>{{ prescription.data.medication_duration }} hours</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Quantity</span> - <span>{{ prescription.data.medication_quantity }} pc</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Refills</span> - <span>{{ prescription.data.medication_refills }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Notes</span> - <span>{{ prescription.data.medication_notes }}</span>
            </li>
            <li class="list-group-item">
                <span class="text-muted">Medication Prescriber</span> - <span>dr. {{ prescription.data.medication_prescriber }}</span>
            </li>
        </ul>
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
