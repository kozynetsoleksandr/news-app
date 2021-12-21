<template>
    <div>
        <navbar />
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Sidebar from "./parts/Sidebar";
export default {
    name: "App",
    components: {Sidebar}
}
</script>

<style scoped>

</style>
