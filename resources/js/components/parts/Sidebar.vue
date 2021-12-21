<template>
    <div>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <ul class="nav nav-pills flex-column mb-auto">
                <div>
                    <vue-tree-navigation :items="items"></vue-tree-navigation>
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
import VueTreeNavigation from 'vue-tree-navigation';

export default {
    name: "Sidebar",
    data() {
        return {
            items: null
        };
    },
    mounted() {
        axios.get('/api/rubrics')
            .then(response => {
                this.items = response.data.data;
            }).then(() => {
            const {res} = this.items.reduce((acc,curr)=>{
                if(acc.parentMap[curr.parentId]){
                    (acc.parentMap[curr.parentId].children =
                        acc.parentMap[curr.parentId].children || []).push(curr);
                } else {
                    acc.res.push(curr);
                }
                acc.parentMap[curr.id] = curr;
                return acc;
            }, {parentMap: {}, res: []});
            this.items = res;
        })
    },

}
</script>

<style scoped>

</style>
