<template>
    <li class="nav-item" :class="className">
        <inertia-link class="nav-link" :href="url" @click="onClick">
            {{ title }}
            <span class="sr-only" v-if="isActive">(current)</span>
        </inertia-link>
    </li>
</template>

<script>
    export default {
        props: {
            title: String,
            routeName: String,
        },

        computed: {
            url() {
                return this.route(this.routeName);
            },

            isActive() {
                return this.route().current(this.routeName);
            },

            className() {
                return {
                    active: this.isActive
                };
            }
        },

        methods: {
            onClick(e) {
                if(this.isActive) {
                    //e.preventDefault();
                }
            }
        }
    };
</script>
