<template>
    <layout>
        <div class="container">
            <h1 class="mb-4">Contacts</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="contact in contacts.data">
                    <th v-text="contact.id" scope="row"></th>
                    <td v-text="contact.name"></td>
                    <td v-text="contact.phone"></td>
                </tr>
                </tbody>
            </table>

            <pagination :collection="contacts"></pagination>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Shared/Layout';
    import Pagination from '@/Shared/Pagination';

    export default {
        components: {
            Layout,
            Pagination
        },

        props: {
            contacts: Object,
        }
    };
</script>
