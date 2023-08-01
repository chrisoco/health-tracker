<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Example" />

    <AppLayout>
        <template #header>
            Example
        </template>

        <div class="py-2">
            <div class="max-w-7xl mx-auto lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div class="p-6 text-gray-900">Example!</div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
