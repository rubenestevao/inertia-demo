<template>
    <ul class="pagination" role="navigation">
        <li class="page-item disabled" aria-disabled="true" aria-label="Previous" v-if="onFirstPage">
            <span class="page-link" aria-hidden="true">&lsaquo;</span>
        </li>
        <li class="page-item" v-else>
            <inertia-link class="page-link" :href="firstPageUrl" rel="prev"
               aria-label="Previous">&lsaquo;</inertia-link>
        </li>

        <template v-for="element in elements">
            <li class="page-item disabled" aria-disabled="true" v-if="typeof element === 'string'">
                <span class="page-link" v-text="element"></span>
            </li>

            <template v-if="typeof element === 'object'" v-for="(url,page) in element">
                <li class="page-item active" aria-current="page" v-if="isCurrentPage(page)">
                    <span class="page-link" v-text="page"></span>
                </li>
                <li class="page-item" v-else>
                    <inertia-link class="page-link" :href="url" v-text="page"></inertia-link>
                </li>
            </template>
        </template>

        <li class="page-item" v-if="hasMorePages">
            <inertia-link class="page-link" :href="lastPageUrl" rel="next" aria-label="Next">&rsaquo;</inertia-link>
        </li>
        <li class="page-item disabled" aria-disabled="true" aria-label="Next" v-else>
            <span class="page-link" aria-hidden="true">&rsaquo;</span>
        </li>
    </ul>
</template>

<script>
    export default {
        props: {
            collection: Object,
        },

        computed: {
            onFirstPage() {
                return this.collection.current_page <= 1;
            },

            firstPageUrl() {
                return this.collection.first_page_url;
            },

            hasMorePages() {
                return this.collection.current_page < this.collection.last_page;
            },

            lastPageUrl() {
                return this.collection.last_page_url;
            },

            currentPage() {
                return this.collection.current_page;
            },

            elements() {
                return this.collection.elements;
            }
        },

        methods: {
          isCurrentPage(page) {
              return parseInt(page) === this.currentPage;
          }
        },
    }
</script>
