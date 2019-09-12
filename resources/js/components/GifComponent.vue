<template>
    <div>
        <button @click="toggleDropdown">GIF</button>
        <div v-show="showDropdown">
            <div>
            <div>
                <form @submit.prevent="doSearch">
                    <input v-model="query" type="text" placeholder="GIF Search" class="form-control" />
                    <button type="submit" class="btn btn-primary" >Go</button>
                </form>

            </div>

            <div v-if="chosenGIF">
                <img :src ="chosenGIF.images.fixed_height.url" />
                    <input type="hidden" name="gif" :value="chosenGIF.images.fixed_height.url" />
            </div>

            <div class="image-container">
                <div class="list-group" >
                    <result
                        v-for="(result, index) in results" :image="result.images.fixed_height.url"
                        @chooseGIFEvent="chooseGIFHandler(index)"
                        :key="index"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import axios from 'axios'
    import Result from './Result.vue'

    export default {
        components: { Result },
        data() {
            return {
                apiKey: '8OcoGVWE7HzgGUhTkSHYIFCmEHlb1Tp9',
                showDropdown: false,
                showResults: false,
                query: '',
                results: [],
                chosenGIF: null
            }
        },

        methods: {

            chooseGIFHandler(target) {

                this.chosenGIF = this.results[target];
                this.showResults = false;

            },

            doSearch() {

                axios.get('https://api.giphy.com/v1/gifs/search?api_key=' + this.apiKey + '&q=' + this.query)
                    .then( (response) => {
                        console.log(response.data.data)
                        this.results = response.data.data;

                })
            },
            toggleDropdown() {
                this.showDropdown = !this.showDropdown;

                if (this.showDropdown == true) {
                    //this.getTrending();
                }
            },

            // getTrending() {
            //     axios.get('https://api.giphy.com/v1/gifs/search?api_key=' + this.apiKey + '&q=' + this.query)
            //         .then( (response) => {
            //             console.log(response.data.data)
            //             this.results = response.data.data;
            //
            //     })
            // }
        }
    }

</script>

<style lang="scss" scoped>


.image-container {
    margin-top: 30px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.list-group {
  margin-top: 5px;
  list-style-type: none;


  position: absolute;
  left: 0; top: 50%;
  width: 100%

}

</style>
