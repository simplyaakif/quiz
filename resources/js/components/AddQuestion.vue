<template>
    <div class="p-2">
        <label for="" class="block">Question</label>
        <input type="text" v-model="question" class=" border-gray-400 border-2 p-2 py-1 w-1/2" placeholder="Quesiton">
        <label for="" class="block mt-2">Answers</label>
        <div class="flex  items-center">
            <input type="text" v-model="answers[0].answer" class=" border-gray-400 border-2 w-1/3 mr-2 p-2 py-1" placeholder="Option">
            <input type="checkbox" v-model="answers[0].correct" name="" id="" class="mr-1" value="1"> Correct
        
        </div>
        <div class="flex  items-center my-2">
            <input type="text" v-model="answers[1].answer" class=" border-gray-400 border-2 w-1/3 mr-2 p-2 py-1" placeholder="Option">
            <input type="checkbox" v-model="answers[1].correct" name="" id="" class="mr-1" value="1"> Correct
        
        </div>
        <div class="flex  items-center">
            <input type="text" v-model="answers[2].answer" class=" border-gray-400 border-2 w-1/3 mr-2 p-2 py-1" placeholder="Option">
            <input type="checkbox" v-model="answers[2].correct" name="" id="" class="mr-1" value="1"> Correct
        
        </div>
        <button class="bg-gray-900 px-4 py-2 rounded text-white mt-4" @click="addQuestion">Add Question</button>
    </div>
</template>

<script>
    import axios from 'axios';

    window.axios = axios;
    Vue.prototype.$http = axios;

    export default {
        data() {
            return {
                question: '',
                answers: [{
                    answer: '',
                    correct: false
                }, {
                    answer: '',
                    correct: false
                }, {
                    answer: '',
                    correct: false
                }
                ],
            }
        },
        methods: {
            addQuestion() {
                this.$http.post('/mcq', {
                    question: this.question,
                    answers: this.answers
                })
                    .then(res => {
                        console.log(res.data);
                        
                    })
                    .catch(er => {
                        console.log(er);
                    });
            }
        }
    }
</script>
