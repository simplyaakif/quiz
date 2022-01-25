ha
<template>
    <div id="quiz">
        <div class="flex" v-show="!done">
            <div class="p-2 md:inline-block md:w-2/3">
                <div class="p-4">
                    <h2 class="text-xl font-bold my-2">Basic Information</h2>
                    <h4 class="text-base my-2">Kindly provide your details.
                    </h4>
                    <div class="md:flex">
                        <div class="m-1 w-full">
                            <label for="">Name <span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your Name " v-model="name"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                        <div class="m-1 w-full">
                            <label for="">Father Name <span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your Father's Name " v-model="fname"
                                   class="border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="m-1 w-full">
                            <label for="">Student/Profession </label>
                            <input placeholder="Enter Your Occupation " v-model="profession"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                        <div class="m-1 w-full">
                            <label for="">Guardian Profession (Father/Husband/Brother) </label>
                            <input placeholder="Enter Your Father's Name " v-model="gprofession"
                                   class="border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="m-1 w-full">
                            <label for="">Email Address <span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your Email " v-model="email"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="email">
                        </div>
                        <div class="m-1 w-full">
                            <label for="">House Address <span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your House Address " name="address" v-model="address"
                                   class="border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                    </div>
                    <div class="md:flex">
                        <div class="m-1 w-full">
                            <label for="">Country<span class="text-red-400">*</span></label>
                            <select name="country" v-model="country"
                                    class="border-2 border-gray-300 rounded p-2 w-full">
                                <option value="" disabled>Select</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="m-1 w-full">
                            <label for="">City </label>
                            <input placeholder="Enter Your City " name="city" v-model="city"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>

                    </div>
                    <div class="md:flex" v-show="country ==='Pakistan'">

                        <div class="m-1 w-full">
                            <label for="">Enter your Mobile Number <span class="text-red-400">*</span></label>

                            <input placeholder="Enter Your Mobile Number " v-model="mobile"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="tel">
                            <small class="block text-red-500">Kindly follow the format of [ 03001234567 ] without any
                                dashes. Incase of wrong format you may not recieve sms </small>

                        </div>
                    </div>
                    <div class="md:flex" v-show="country ==='Other'">
                        <div class="m-1 w-full">
                            <label for="">Enter your Mobile Number <span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your Mobile Number " v-model="mobile"
                                   class=" border-2 border-gray-300 rounded p-2 w-full"
                                   type="tel">
                        </div>

                    </div>
                    <div class="md:flex">
                        <div class="m-1 w-full">
                            <label for="">Landline Number<span class="text-red-400">*</span></label>
                            <input placeholder="Enter Your Home Number" v-model="landline"
                                   class="border-2 border-gray-300 rounded p-2 w-full"
                                   type="text">
                        </div>
                    </div>
                    <div class="md:flex mt-3">
                        <div class="m-1 w-full">
                            <label for="">Applying For<span class="text-red-400">*</span></label>

                            <ul class="unstyled mb-0   items-center ">
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Spoken English" v-model="course"
                                                  :name="course" class="mr-2">Spoken English</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="IELTS" v-model="course"
                                                  :name="course" class="mr-2">IELTS</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="TOEFL" v-model="course"
                                                  :name="course" class="mr-2">TOEFL</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:flex mt-3">
                        <div class="m-1 w-full">
                            <label for="">Evaluation given from location<span class="text-red-400">*</span></label>

                            <ul class="unstyled mb-0   items-center ">
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Inside the Campus" v-model="location"
                                                  :name="location" class="mr-2">Inside the Campus</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="From Home" v-model="location"
                                                  :name="location" class="mr-2">From Home</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:flex mt-3">
                        <div class="m-1 w-full">
                            <label for="">Mode of Learning Preference<span class="text-red-400">*</span></label>

                            <ul class="unstyled mb-0   items-center ">
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Regular Course" v-model="medium"
                                                  :name="medium" class="mr-2">Regular Course</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Weekend Course" v-model="medium"
                                                  :name="medium" class="mr-2">Weekend Course</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Online Course" v-model="medium"
                                                  :name="medium" class="mr-2">Online Course</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:flex mt-3">
                        <div class="m-1 w-full">
                            <label for="">Course Time Preference<span class="text-red-400">*</span></label>

                            <ul class="unstyled mb-0   items-center ">
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Morning" v-model="time"
                                                  :name="time" class="mr-2">Morning</label>
                                </li>
                                <li class="ml-6 inline-block">
                                    <label><input type="radio" value="Evening" v-model="time"
                                                  :name="time" class="mr-2">Evening</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="hidden p-4">

                    <h2 class="text-xl font-bold my-2">Educational Background Information</h2>
                    <h4 class="text-base my-2">Kindly provide your details.</h4>
                    <div class="flex">
                        <div class="m-1 w-full">
                            Years of Education: (Check last year completed)<span class="text-red-400">*</span>
                            <div class="block">
                                <input
                                    class=" mr-2"
                                    type="checkbox"> Elementary (5th - 8th grade)
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="p-4">
                    <h2 class="text-xl font-bold my-2">ASSESSMENT FORM</h2>
                    <h4 class="text-base my-2">Mark the correct option. (Kindly attempt all questions)
                    </h4>
                    <div class="my-1 px-3 py-2" v-for="(mcq,j) in mcqs">
                        <p class="mb-1">{{j+1}}. {{mcq.question}}</p>
                        <ul class="unstyled mb-0   items-center">
                            <li class="ml-6 " v-for="(answer,k) in mcq.answers">
                                <label><input type="radio" :value="answer.answer" v-model="userquiz[j]" @click="userMcq"
                                              :name="'q'+mcq.id" class="mr-2">{{answer.answer}}</label>
                            </li>
                        </ul>
                    </div>

                </div>

                <hr>
                <div class="p-4">
                    <h2 class="text-xl font-bold my-2">Q#51. Attempt Any 1 of the following two <span
                        class="text-red-500">WRITING</span> questions.</h2>
                    <img class="w-full rounded" src="img/text-question-img.jpg" alt="">
                    <h4 class="text-base my-2">1. Describe the given picture in your own words. [ 100 - 150 words ]
                    </h4>
                    <textarea v-model="q1" name="" cols="30" class="p-2 rounded border-2 border-gray-300 w-full"
                              placeholder="Write your answer here." rows="20"></textarea>
                    <h2 class="text-xl font-bold ">OR</h2>
                    <h4 class="text-base my-2">2. Write about a strong childhood memory – for example, something that
                        made
                        you very happy or very frightened. Briefly explain how old you were and where you were, and tell
                        the
                        story of what happened. Try to remember details such as sounds, smells, colours and the weather,
                        and
                        describe these in your story. Explain how you felt and why you felt this way. How do you feel
                        now
                        about the event?
                    </h4>
                    <textarea v-model="q2" name="" id="" cols="30" class="p-2 rounded border-2 border-gray-300 w-full"
                              placeholder="Write your answer here." rows="20"></textarea>

                </div>

                <div class="text-center">
                    <button v-show="!submitting" class=" m-4 bg-gray-900 text-white text-center w-32 px-4 py-1 rounded"
                            @click="submitQuiz">
                        Submit
                    </button>
                    <button v-show="submitting" disabled
                            class=" m-4 mb-2 bg-gray-300 text-white text-center  px-4 py-1 rounded"
                    >
                        Submitting Evaluation
                    </button>

                    <small v-show="submitting" class="mb-10 block"> Please Wait...</small>
                </div>
            </div>
            <div class="hidden md:inline-block md:w-1/3 relative">
                <div class="sticky  m-3 " style="top:20px">
                    <div class="bg-gray-200  w-full p-4">

                        <p class="text-red-600 text-xl">Information regarding evaluation.</p>
                        <ul class="list-none">
                            <li>1. Fields marked with (*) are required.</li>
                            <li>2. Kindly attempt all mcqs</li>
                            <li>3. You are requested to attempt evaluation in 40 minutes</li>
                            <li>4. WRITING question is compulsory. (Q#51)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="message" v-show="done">
            <div style="padding: 10%;" class=" bg-white text-center rounded-lg shadow">
                <h2 class="text-green-400 text-3xl">Evaluation submitted successfully.</h2>
                <p class="text-blue-500">Thank you {{name}} for your time.</p>
                <p class="">Our staff will contact you shortly.</p>
                <a href="http://ace.org.pk" class="bg-blue-500 rounded inline-block px-4 py-2 text-white mt-3">Go to
                    HomePage</a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    window.axios = axios;
    Vue.prototype.$http = axios;

    export default {
        data() {
            return {
                done: false,
                submitting: false,
                userquiz: [],
                course: '',
                name: '',
                fname: '',
                profession: '',
                gprofession: '',
                email: '',
                address: '',
                city: '',
                country: '',
                location: '',
                time: '',
                medium: '',
                mobile: '',
                landline: '',
                q1: '',
                q2: '',
                options: {
                    closeButton: true,
                    debug: false,
                    newestOnTop: false,
                    progressBar: false,
                    positionClass: "toast-top-center",
                    preventDuplicates: false,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    timeOut: "5000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut"
                }
            }
        },
        props: {
            mcqs: Array,
        },
        methods: {
            userMcq() {

            },
            submitQuiz() {
                if (this.name === '' || this.email === '' || this.country === '' || this.mobile === '' || this.fname === '' || this.address === '') {
                    this.$toastr.warning('One or more Required Fields are missing. Check basic information section.', '', this.options);
                    console.log('Required Fields are missing')
                } else {
                    this.submitting = true;
                    this.$toastr.info('Generating your result. Please wait', '', this.options);
                    this.$http.post('/quizcheck', {
                        name: this.name,
                        email: this.email,
                        mobile: this.mobile,
                        quizmcq: this.userquiz,
                        course: this.course,
                        location: this.location,
                        medium: this.medium,
                        time: this.time,
                        q1: this.q1,
                        q2: this.q2,
                        meta: {
                            father_name: this.fname,
                            profession: this.profession,
                            guardian_profession: this.gprofession,
                            address: this.address,
                            city: this.city,
                            country: this.country,
                            landline: this.landline,
                        },
                    })
                        .then(res => {
                            this.done = true;
                            console.log(res.data);

                        })
                        .catch(er => {
                            console.log(er);
                        });
                }
            }
        }
    }
</script>
