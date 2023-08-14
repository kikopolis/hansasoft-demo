import {createRouter, createWebHistory} from "vue-router";
import IdCheck from "../components/IdCheck.vue";
import Prescriptions from "../components/Prescriptions.vue";
import Prescription from "../components/Prescription.vue";

const routes = [
    {
        path: "/id-check",
        name: "IdCheck",
        component: IdCheck,
    },
    {
        path: "/prescriptions",
        name: "Prescriptions",
        component: Prescriptions,
    },
    {
        path: "/prescriptions/:id(\\d+)",
        name: "Prescription",
        component: Prescription,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
