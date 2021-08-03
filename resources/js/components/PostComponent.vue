<template>
    <div class="container">
        <h2>Test Component</h2>
        <p>Detailed information about posts</p>
        <p>{{text}}</p>

    </div>
</template>

<script>
    export default {
        props: ['text'],
        mounted() {
            console.log('Component mounted.')
            
        }
    }
</script>
<style lang="scss" scoped>
    .container{
        margin:0;
        text-align:left;
        padding:10px;
        
        
    }
 </style>