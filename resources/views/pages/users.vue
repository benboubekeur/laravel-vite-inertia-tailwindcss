<script lang="ts" setup>
import {PropType} from "vue";

interface User {
    id: number,
    name: string,
    age: number
}

defineProps<{
    users: PropType<User[]>

}>()
console.warn('From setup function')
</script>

<template layout="default">
    <div
        class="relative flex items-top justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900 sm:items-center py-4 sm:pt-0">
        <h1>Users</h1>
        <ul class="list-disc">

            <li v-for="user in users" key="user.id">My name is : {{ user.name }}</li>

        </ul>
    </div>
</template>

<style scoped>

</style>