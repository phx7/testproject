<template>
    <div>
        <h1>Add funds</h1>
        <form @submit.prevent="addFunds">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Provide phone number to add funds to:</label>
                        <input type="tel" v-on:input="handleInput()" placeholder="+9(999)999-99-99" v-mask="'+#(###)###-##-##'" class="form-control" v-model="funds.phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Current balance:</label>
                        <input readonly v-model="funds.total" v-money={} class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Add amount:</label>
                        <input v-model="funds.amount" v-money={} class="form-control" />
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
                let input = {
                    amount: this.funds.amount.toString().replace(/[^0-9.]/g, ''),
                    phone: this.funds.phone.match(/\d+/g).join(''),
                    operator: this.operator,
                    user_id: 1 //TODO: replace
                };
                let uri = '/api/post/addFunds';
                this.axios.post(uri, input).then((response) => {
                    this.$router.push({name: 'home'});
                });
            },
            handleInput(){
                let input = {
                    phone: this.funds.phone.match(/\d+/g).join(''),
                    operator: this.operator,
                    user_id: 1 //TODO: replace
                };
                if (input.phone.length === 11) {
                    let uri = '/api/post/getFunds';
                    this.axios.post(uri, input).then((response) => {
                        console.log(response.status);
                        console.log(response.data);
                        if (response.status === 200) {
                            this.funds.total = parseFloat(response.data);
                        }
                    });
                }
            }
        }
    }
</script>
