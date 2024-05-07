<script setup>


</script>

<template>
    <v-app>
        <v-app-bar :elevation="2" style="background-color: #36A2EB; color: whitesmoke;">
            <template v-slot:prepend>
                <v-app-bar-nav-icon></v-app-bar-nav-icon>
            </template>


            <v-app-bar-title>Eloquent relationships</v-app-bar-title>
            <v-list-item title="HasMany" :href="route('hasmany')"></v-list-item>

            <v-list-item title="HasManyThrough" :href="route('hasmanythrough')"></v-list-item>

            <v-list-item title="ManyToMany" :href="route('manytomany')"></v-list-item>

            <v-list-item title="PolyHasMany" :href="route('hasmanythrough')"></v-list-item>

            <v-list-item title="PolyManyToMany" :href="route('hasmanythrough')"></v-list-item>

        </v-app-bar>

        <!-- Page Content -->
        <main class="mx-auto my-auto">
            <slot name="main" />
        </main>

    </v-app>


</template>
