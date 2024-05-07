<template>
    <v-app>
        <AuthenticatedLayout>
            <template #main class="">
                <v-sheet class="mt-10">
                    <div v-if="plumbers.length === 0">
                        <h1>Seed with: sail artisan db:seed --class=PlumberSeeder</h1>

                    </div>

                    <div v-else>
                        <p v-for=" plumber in plumbers">
                        <p>Plumber name: {{ plumber.name }}</p>
                        <p v-for="clients in plumber.clients">Plumber clients: {{ clients.name }}</p>

                        <br> </p>
                    </div>

                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps(['plumbers'])
</script>