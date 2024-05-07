<template>
    <v-app>
        <AuthenticatedLayout>
            <template #main class="">
                <v-sheet class="mt-10">

                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps([])
</script>