<template>
    <v-app>
        <AuthenticatedLayout>
            <template #main class="">
                <v-sheet class="mt-10">
                    <div v-if="authors.length === 0">
                        <h1>Seed with: sail artisan db:seed --class=AuthorSeeder </h1>
                    </div>

                    <div v-else>

                        <p v-for="author in authors">
                        <p>Author: {{ author.name }}</p>
                        <p v-for="books in author.books">
                            Books: {{ books.title }}
                        </p>
                        </p>
                        <br><br>
                    </div>

                </v-sheet>
            </template>
        </AuthenticatedLayout>
    </v-app>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps(['authors', 'books'])
</script>