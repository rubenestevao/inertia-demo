<template>
    <div>
        <main-menu></main-menu>

        <main class="test pb-5" role="main">

            <slot></slot>

        </main>
    </div>
</template>

<script>
    import MainMenu from '@/Shared/MainMenu';

    export default {
        components: {
            MainMenu
        }
    };
</script>
