<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <v-app>
        <AuthenticatedLayout>
            <template #main>
                <v-sheet class="d-flex align-center justify-center flex-wrap text-center mx-auto px-4" elevation="4"
                    height="250" max-width="800" width="100%" rounded>
                    <div>
                        <h2 class="text-h4 font-weight-black text-orange">Relationship practice</h2>
                    </div>
                </v-sheet>
            </template>
        </AuthenticatedLayout>

    </v-app>


</template>
