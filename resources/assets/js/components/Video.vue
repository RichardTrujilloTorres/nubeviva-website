<template>

    <div class="well">
        <h5>{{ title }}</h5>
        <p>{{ description }}</p>
        
        <ul class="list-group">
            <li class="list-group-item" v-show="published === 'true'">
                <i class="fa fa-task" ></i> // parts
                <i class="fa fa-clock-o"></i> // duration
                <i class="fa fa-calendar"></i> {{ publishedAt }}
            </li>

            <li class="list-group-item" v-show="published === 'false'">
                <p>Comming Soon</p>
            </li>
        </ul>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('videoComponent()')
        },
        props: [
            'title',
            'description',
            'publishedAt',
            'published',
            ]
    }
</script>
