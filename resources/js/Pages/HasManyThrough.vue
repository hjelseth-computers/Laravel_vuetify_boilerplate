<template>
    <v-app>
        <AuthenticatedLayout>
            <template #main>
                <v-sheet class="mt-10">
                    <div v-if="plumbers.length === 0">
                        <h1>Seed with: sail artisan db:seed --class=PlumberSeeder</h1>
                    </div>

                    <div v-else>
                        <h1>
                            <p v-for=" plumber in plumbers">
                            <p>Plumber name: {{ plumber.name }}</p>
                            <p v-for="clients in plumber.clients">Plumber clients: {{ clients.name }}</p>
                            <p v-for="referrals in plumber.referrals">Plumber referrals: {{ referrals.reviews }}</p>
                            <br>
                            </p>
                        </h1>
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