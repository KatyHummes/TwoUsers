<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: Array,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <select :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
        <option value="">selecione</option>
        <option value="seller">vendedor</option>
        <option value="buyer">cliente</option>
    </select>
</template>
