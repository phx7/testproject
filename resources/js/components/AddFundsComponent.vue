<template>
    <div>
        <h1>Add funds</h1>
        <form @submit.prevent="addFunds">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Provide phone number to add funds to:</label>
                        <input type="tel" class="form-control" v-model="funds.phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Amount:</label>
                        <input type="number" class="form-control" v-model="funds.amount">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Add funds</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['operator'],
        data(){
            return {
                funds:{}
            }
        },
        methods: {
            addFunds(){
                this.funds.operator = this.operator;
                let uri = '/api/post/funds';
                this.axios.post(uri, this.funds).then((response) => {
                    this.$router.push({name: 'posts'});
                });
            }
        }
    }
</script>
