<template>
    <div>
        <div class="form-group">
        <input type="text" class="form-control m-3 mt-4" v-model="keyword" placeholder="Zoek een story op naam">
        </div>
        <div v-if="Stories.length > 0">

            <div class="row"  v-for="story in Stories">
                <div class="col-4">
                    <div class="card mt-12">
                        <div class="card-header">
                            <p
                               :key="story.id"
                               v-text="story.name"></p>

                        </div>
                        <div class="card-body">
                            <a v-bind:href="'/stories/' + story.id" class="btn m-1 btn-primary">show</a>
                            <a v-bind:href="'/stories/' + story.id + '/edit'" class="btn btn-primary">edit</a>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword: null,
            Stories: []
        };
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/livesearch', { params: { keyword: this.keyword } })
                .then(res => this.Stories = res.data)
                .catch(error => {});
        },
    }
}
export{}
</script>
