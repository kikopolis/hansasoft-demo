<template>
    <header>
        <nav class="navbar navbar-light bg-primary box-shadow text-light">
            <div class="container">
                <h2>Pharmacy Demo</h2>
                <ul class="nav">
                    <li class="nav-item mx-3">
                        <RouterLink to="/prescriptions" class="link-light">Prescriptions</RouterLink>
                    </li>
                    <li class="nav-item mx-3">
                        <RouterLink to="/id-check" class="link-light">ID-code check</RouterLink>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <RouterView></RouterView>
        </div>
    </main>
</template>
<script setup>
import { RouterLink} from "vue-router";
import { RouterView} from "vue-router";
</script>
