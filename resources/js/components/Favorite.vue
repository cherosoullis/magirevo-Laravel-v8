<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(recipe)">
          <i class="fas fa-heart"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(recipe)">
          <i class="far fa-heart"></i>
        </a>
    </span>
</template>

<script>

    export default {
        props: ['recipe', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
            console.log(this.slug);
        },

        computed: {
            isFavorite() {
                return this.favorited;
                console.log(this.favorited);
            },

        },

        methods: {
            favorite(recipe) {
                axios.post('/favorite/'+recipe)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(recipe) {
                axios.post('/unfavorite/'+recipe)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>
