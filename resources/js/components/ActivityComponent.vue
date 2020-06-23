<template>
    <div class="container align-content-center col-sm-6 page_cnt">
        <h2 class="page-name">Targets for today</h2>

        <div v-if="list" class="col-sm">
            <div class="row target-row target-row-header">
                <div class="col-sm text-center">
                    Title
                </div>
                <div class="col-sm text-center">
                    Description
                </div>
                <div class="col-sm text-center">
                    Actions
                </div>
            </div>
            <hr>
            <div v-for="item in list" class="row target-row">
                <div class="col-sm text-center">
                    {{ item.title }}
                </div>
                <div class="col-sm text-center">
                    {{ item.description }}
                </div>
                <div class="col-sm mark-check-box text-center">
                    <div class="form-group">
                        <input @click="mark(item)" class="btn form-check-input" type="checkbox" v-model="item.checked">
                    </div>
                </div>
            </div>
        </div>
        <div v-else class="row justify-content-sm-center">
            <div class="text-center"><h3 class="font-weight-light">Empty.</h3></div>
            <div class="w-100"></div>
            <div class="text-center"><h5 class="font-weight-light">Create a new target.</h5></div>
            <div class="w-100"></div>
            <a class="btn btn-primary col-sm-auto" :href="createTargetUrl">
                <i class="fa fa-plus-square-o"></i>
                Create
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'createTargetUrl'
        ],
        data: function () {
            return {
                list: [],
                count: 0
            }
        },
        mounted() {
            this.loadList()
            console.log('Component mounted.')
        },
        methods: {
            loadList: function () {
                axios.get('/activity/load').then((response) => {
                    this.list = response.data;
                })
            },

            mark: function (target) {
                let url;
                if (target.checked) {
                    url = '/activity/unmark'
                } else {
                    url = '/activity/mark'
                }
                url += '/' + target.id;

                axios.get(url).then((response) => {
                    this.list = response.data;
                })
            },
        }
    }
</script>
