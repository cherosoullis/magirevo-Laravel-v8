<template>

  <star-rating @rating-selected ="setRating" active-color="#9c0000" @click.prevent="rate(recipe)"></star-rating>

</template>

<script>
export default {
  props: ['recipe', 'recipeID', 'rated', 'currentRating', 'currentSelectedRating', 'boundRating'],
  mounted() {
      // this.isFavorited = this.isFavorite ? true : false;
      console.log('Component mounted.')
      console.log('This is mounted recipe ID ' + this.recipe)
      console.log('This is mounted attrs recipe ID' + this.$attrs.recipe)
  },

  methods: {
      rate() {
        recipeID = this.recipe
          axios.post('/rateRecipe/'+recipeID)
              // .then(response => this.isFavorited = true)
              .catch(response => console.log(response.data));
              console.log('This is the recipe ID' + recipeID)
      },
      setRating: function(rating) {
        this.rating= rating;
        // recipeID = this.recipe;
        // this.rating = "You have Selected: " + rating + " stars";
        console.log('This is the setRating ' + this.rating);
        // console.log('This is the setRating recipe ' + this.recipe);
      }

      // unFavorite(recipe) {
      //     axios.post('/unfavorite/'+recipe)
      //         .then(response => this.isFavorited = false)
      //         .catch(response => console.log(response.data));
      // }
  }
}

// export default {
//   data(){
//     return{
//       recipe: '',
      // components: {
      //   star-rating
      // },
      // name: "star-rating",
      // components: {
      //     'star-rating' : star-rating
      //   },
      //   props: ['star-rating'],
        // props: ['config', 'recipe', 'rated', 'rating', 'currentRating', 'currentSelectedRating', 'boundRating', 'setRating'],
        // props: ['recipe'],
        // data: function() {
        //     return {
        //       recipe: this.recipe,
        //         config: {
        //             rating: 4.7,
        //             style: {
        //                 fullStarColor: '#ed8a19',
        //                 emptyStarColor: '#737373',
        //                 starWidth: 30,
        //                 starHeight: 30
        //             }
        //         }
        //     }
        // },
        // computed: {
        //   listeners(){
        //     console.log(this.$attrs)
        //   }
        // },
        // created: function () {
        //   console.log('created function ' + this.$attrs[recipe]) // And here is - in $attrs object
        // },

        // data: function() {
        //   // rating: 0,
        //   // rating: "No Rating Selected",
        //   // currentRating: "No Rating",
        //   // currentSelectedRating: "No Current Rating",
        //   // boundRating: 3,
        //     return {
        //     //     // isFavorited: '',
        //       rating: 0,
        //       setRating:0,
        //       currentRating: "No Rating",
        //     //   currentSelectedRating: "No Current Rating",
        //     //   boundRating: 3,
        //     }
        // },

        // mounted() {
        //     this.isFavorited = this.isFavorite ? true : false;
        //     console.log('Component mounted.');
        //     console.log(this.recipe);
        //     console.log(this);
        // }

        // computed: {
            // isRated() {
            //     return this.Rated;
            //     console.log(this.Rated);
            // },
        // },

        // methods: {
          // setRating: function(rating) {
          //   // this.rating = "You have Selected: " + rating + " stars";
          //   console.log(this.rating);
          // },
          // showCurrentRating: function(rating) {
          //   this.currentRating = (rating === 0) ? this.currentSelectedRating : "Click to select " + rating + " stars"
          //   console.log(this.currentRating);
          // },
          // setCurrentSelectedRating: function(rating) {
          //   this.currentSelectedRating = "You have Selected: " + rating + " stars";
          //   console.log(this.currentSelectedRating);
          // },
          // showCurrentRating: function(rating) {
          //   this.currentRating = (rating === 0) ? this.currentSelectedRating : "Click to select " + rating + " stars"
          // },
          // setCurrentSelectedRating: function(rating) {
          //   this.currentSelectedRating = "You have Selected: " + rating + " stars";
          // }
            // favorite(recipe) {
            //     axios.post('/favorite/'+recipe)
            //         .then(response => this.isFavorited = true)
            //         .catch(response => console.log(response.data));
            // },
            //
            // unFavorite(recipe) {
            //     axios.post('/unfavorite/'+recipe)
            //         .then(response => this.isFavorited = false)
            //         .catch(response => console.log(response.data));
            // }

    // }
</script>
