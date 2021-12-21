<template>
    <div>
        <div class="row">
            <div class="col-lg-4" v-for="novelty in novelties">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ novelty.title }}</h5>
                        <p class="card-text">{{ novelty.text }}</p>
                        <p v-for="rubric in novelty.rubric" class="card-text">Rubric: {{ rubric.name }}</p>
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
            novelties: null
        };
    },
    mounted() {
        axios.get('/api/novelty')
            .then(response => {
                this.novelties = response.data.data;
            })
    }
}
</script>

<style scoped>

</style>
