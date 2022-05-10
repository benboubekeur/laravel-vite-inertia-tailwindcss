<script lang="ts" setup>
defineProps<{
    message:
        string
}>()
</script>

<template layout="default">
    <div
        className="relative flex items-top justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900 sm:items-center py-4 sm:pt-0">
        <p class="text-8xl text-green-300">{{ message }}</p>
    </div>
</template>
