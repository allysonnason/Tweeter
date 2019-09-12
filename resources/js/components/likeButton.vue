<template>
<a href="" @click="doLike">
    <button>{{dataIsLiked ? 'Unlike' : 'Like'}}{{ dataCount }}</button>
</a>


</template>
<script>
    import axios from 'axios'
        export default {
            props: [ 'count', 'postId', 'isLiked', 'like'],

            data() {
                return {
                    dataCount: 0,
                    dataIsLiked: false,
                }
            },

            mounted() {
                this.dataCount = this.count;
                this.dataIsLiked = this.isLiked;
            },

            methods: {
                doLike(e) {
                    if(this.dataIsLiked) {
                        var url = '/posts/' + this.postId + 'unlike';
                    } else {
                        var url = '/posts/' + this.postId  + 'like';
                    }

                    axios.post(url)
                    .then((response) => {
                        if(response.data.status == 'success'){
                            if(this.dataIsLiked) {
                                this.dataCount--;
                                this.dataIsLiked = false;
                            } else {
                                this.dataCount++;
                                this.dataIsLiked = true;
                            }
                        }
                    })
                }

            }
        }
</script>

<style></style>
