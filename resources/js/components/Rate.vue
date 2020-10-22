<template>
<div>
  <star-rating :increment="0.5" @rating-selected ="setRating" active-color="#9c0000" ></star-rating>
  <!-- <textarea></textarea> -->
  <!-- <a class="nav-link"  value="C3000" @click="test()" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Search</a> -->
</div>
</template>

<script>
export default {
  props: ['recipe', 'recipeID', 'rated', 'currentRating', 'currentSelectedRating', 'boundRating'],
  mounted() {
      // this.isFavorited = this.isFavorite ? true : false;
      console.log('Component mounted.')
      console.log('This is mounted recipe ID ' + this.recipe) //this is with recipe in props
      console.log('This is mounted attrs recipe ID' + this.$attrs.recipe) //this is without recipe in props
  },

  methods: {
   //  test(){
   //    Swal.fire('Test!', 'Hello test message','success');
   // },
      // rate() {
      //   recipeID = this.recipe
      //     axios.post('/rateRecipe/'+recipeID)
      //         // .then(response => this.isFavorited = true)
      //         .catch(response => console.log(response.data));
      //         console.log('This is the recipe ID' + recipeID)
      // },
      setRating: function(rating) {
        // Swal.fire('Any fool can use a computer')
        // Swal.fire('Test!', 'Hello test message','success');
        Swal.fire({
          title: 'Σχολιάστε τη βαθμολογία σας',
          input: 'textarea',
          inputAttributes: {
            autocapitalize: 'off'
          },
          showCancelButton: true,
          confirmButtonText: 'Επιβεβαίωση',
          showLoaderOnConfirm: true,
          preConfirm: (comment) => {
            this.rating= rating
            // return
            //fetch(`//api.github.com/users/${comment}`)
            axios.post('/rate/'+this.recipe+'/'+ this.rating+'/'+ comment)
              // .then(response => {
              //   if (!response.ok) {
              //     throw new Error(response.statusText)
              //   }
              //   return response.json()
              // })
              // .catch(error => {
              //   Swal.showValidationMessage(
              //     `Δεν ήταν επιτυχής: ${error}`
              //   )
              // })
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire('Ευχαριστούμε για την ψήφο σας')
            // Swal.fire({
            //   title: `${result.value.login}'s avatar`,
            //   imageUrl: result.value.avatar_url
            // })
          }
        })
      //
      //   this.rating= rating
      //   axios.post('/rate/'+this.recipe+'/'+this.rating)
      //   // axios.post('/rate/'+this.recipe)
      //       .then(response => console.log(response.data))
      //       // .then(response => this.isFavorited = true)
      //       .catch(response => console.log(response.data));
      //   // this.recipe
      //   // recipeID = this.recipe;
      //   // this.rating = "You have Selected: " + rating + " stars";
      //   console.log('This is the setRating ' + this.rating)
      //   console.log('This is the setRating for recipe ' + this.recipe)
      //   // console.log('This is the setRating recipe ' + this.recipe);
      // }

      // unFavorite(recipe) {
      //     axios.post('/unfavorite/'+recipe)
      //         .then(response => this.isFavorited = false)
      //         .catch(response => console.log(response.data));
      }
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
