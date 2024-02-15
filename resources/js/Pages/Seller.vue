<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    user: Object,
});
</script>

<template>
    <AppLayout title="Dashboard" :user="user">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Área do Vendedor
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    crie seus produtos
                </div>
            </div>
        </div>
    </AppLayout>
</template>