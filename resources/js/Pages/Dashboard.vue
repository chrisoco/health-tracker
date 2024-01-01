<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout>
        <template #header>
            Smoking Tracker
        </template>
        <!--
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>
        -->
        <Widget :class="'lg:col-span-3'">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">You're logged in...!</div>
            </div>
        </Widget>
    </AppLayout>
</template>
