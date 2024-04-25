<script setup>


</script>

<template>
    <v-app>
        <v-app-bar :elevation="2">
            <template v-slot:prepend>
                <v-app-bar-nav-icon></v-app-bar-nav-icon>
            </template>

            <v-app-bar-title>Application Bar</v-app-bar-title>
        </v-app-bar>

        <!-- Page Content -->
        <main class="my-auto">
            <slot name="main" />
        </main>

    </v-app>


</template>
