<script setup lang="ts">
import { index, profile } from '@/routes';
import { Link } from '@inertiajs/vue3';

const initials = 'BA';
</script>

<template>
    <nav class="flex h-16 items-center justify-between border-b-[6px] bg-gradient-to-r from-[#1C371C] to-[#2D5A2E] px-4 text-white">
        <div>
            <Link class="text-2xl font-bold" :href="index()">Car & Classic</Link>
        </div>

        <div>
            <Link
                class="flex size-10 items-center justify-center rounded-full border-2 border-white bg-gradient-to-r from-[#1C371C] to-[#2D5A2E] text-lg leading-none font-medium"
                :href="profile()"
            >
                {{ initials }}
            </Link>
        </div>
    </nav>

    <main class="mx-auto max-w-screen-xl p-2">
        <slot />
    </main>
</template>
