<template>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
        <inertia-link class="navbar-brand" :href="route('welcome')" v-text="$page.app.name"></inertia-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <main-menu-link title="Welcome" route-name="welcome"></main-menu-link>
                <main-menu-link title="Contacts" route-name="contacts"></main-menu-link>
            </ul>
        </div>
    </nav>
</template>

<script>
    import MainMenuLink from '@/Shared/MainMenuLink';

    export default {
        components: {
            MainMenuLink
        }
    }
</script>
