<section id="contact" class="py-12 lg:py-24">

    <div class="container mx-auto px-6 lg:px-10">

        <!-- SMALL DIVIDER -->
        <div class="w-64 h-px mx-auto mb-8 bg-gradient-to-r from-transparent via-primary to-transparent"></div>

        <!-- HEADER -->
        <div class="text-center max-w-2xl mx-auto mb-20">

            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Let's Work Together
            </h2>

            <p class="text-gray-400 mb-8 leading-relaxed">
                Have a project in mind? I help businesses build high-converting
                websites, funnels, and automation systems.
            </p>

        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- LEFT SIDE -->
            <div class="card bg-base-200 shadow-xl">

                <div class="card-body p-10">

                    <form id="contactForm" onsubmit="sendMail(event)" class="space-y-4">

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" id="name" placeholder="Your name"
                                class="input input-bordered validator w-full" minlength="2" required />
                            <p class="validator-hint hidden">
                                Name must be at least 2 characters
                            </p>
                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" id="email" required placeholder="Your email"
                                class="input input-bordered validator w-full" />
                            <p class="validator-hint hidden">
                                Please enter a valid email
                            </p>
                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Project Type</span>
                            </label>

                            <select id="projectType" class="select select-bordered validator w-full">

                                <option value="Funnels">Funnels</option>
                                <option value="Websites">Websites</option>
                                <option value="WordPress">WordPress</option>
                                <option value="Automation">Automation</option>

                            </select>
                            <p class="validator-hint hidden">
                                Please select a project type
                            </p>

                        </div>

                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Message</span>
                            </label>

                            <textarea id="message" minlength="5" required class="textarea textarea-bordered validator h-28 lg:w-full"
                                placeholder="Tell me about your project"></textarea>
                            <p class="validator-hint hidden">
                                Message must be at least 10 characters
                            </p>
                        </div>

                        <button id="submitBtn" type="submit" class="btn btn-primary w-full mt-4">
                            Send Message
                        </button>


                    </form>

                    <!-- Toasts -->
                    <div id="toastSuccess" class="toast toast-end toast-top z-50 hidden">
                        <div class="alert alert-success">
                            <span>Message sent successfully!</span>
                        </div>
                    </div>

                    <div id="toastError" class="toast toast-end toast-top z-50 hidden">
                        <div class="alert alert-error">
                            <span>Failed to send message. Try again.</span>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div>

                {{-- CONTACT GRID --}}
                <div class="grid grid-cols-2 gap-4 max-w-full">

                    <!-- EMAIL -->
                    <a href="mailto:niniomelendres123@gmail.com"
                        class="card bg-base-200 hover:bg-base-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5 text-center">

                        <div class="flex flex-col items-center gap-3">

                            <!-- lucide mail -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">

                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-10 5L2 7" />

                            </svg>

                            <span class="text-sm text-gray-300">
                                niniomelendres123@mail.com
                            </span>

                        </div>

                    </a>


                    <!-- LINKEDIN -->
                    <a href="https://www.linkedin.com/in/ninio-melendres-b6a646362/" target="_blank"
                        class="card bg-base-200 hover:bg-base-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5 text-center">

                        <div class="flex flex-col items-center gap-3">

                            <!-- lucide linkedin -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">

                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect width="4" height="12" x="2" y="9" />
                                <circle cx="4" cy="4" r="2" />

                            </svg>

                            <span class="text-sm text-gray-300">
                                LinkedIn
                            </span>

                        </div>

                    </a>


                    <!-- PHONE -->
                    <a href="tel:+639395965793"
                        class="card bg-base-200 hover:bg-base-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5 text-center">

                        <div class="flex flex-col items-center gap-3">

                            <!-- lucide message-square -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">

                                <path d="M21 15a4 4 0 0 1-4 4H7l-4 4V5a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" />

                            </svg>

                            <span class="text-sm text-gray-300">
                                +63 935 596 5793
                            </span>

                        </div>

                    </a>


                    <!-- GITHUB -->
                    <a href="https://github.com/yourusername" target="_blank"
                        class="card bg-base-200 hover:bg-base-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5 text-center">

                        <div class="flex flex-col items-center gap-3">

                            <!-- lucide code -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">

                                <polyline points="16 18 22 12 16 6" />
                                <polyline points="8 6 2 12 8 18" />

                            </svg>

                            <span class="text-sm text-gray-300">
                                GitHub
                            </span>

                        </div>

                    </a>

                </div>

                {{-- LOCATION CONTAINER --}}
                <div class="mt-10 rounded-xl overflow-hidden shadow-lg">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61728.644977933865!2d120.8283038527628!3d14.766759099139893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33964d16f1fd52fb%3A0x86bd978533995ead!2sBulakan%2C%20Bulacan!5e0!3m2!1sen!2sph!4v1773135644335!5m2!1sen!2sph"
                        width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>

        </div>

    </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script>
    emailjs.init("rg-Ssxjv2G8OUvBbH");

    async function sendMail(e) {

        e.preventDefault();

        const form = document.getElementById("contactForm");

        // browser validation
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const btn = document.getElementById("submitBtn");
        btn.disabled = true;
        btn.innerText = "Sending...";

        const templateParams = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value,
            subject: document.getElementById('projectType').value
        };

        try {

            await emailjs.send(
                "service_js78quf",
                "template_2041179",
                templateParams
            );

            showToast("Message sent successfully!", "success");

            form.reset();

        } catch {

            showToast("Failed to send message.", "error");

        }

        btn.disabled = false;
        btn.innerText = "Send Message";
    }


    function showToast(message, type) {

        const toast = document.getElementById(
            type === "success" ? "toastSuccess" : "toastError"
        );

        toast.querySelector("span").innerText = message;

        toast.classList.remove("hidden");

        setTimeout(() => {
            toast.classList.add("hidden");
        }, 4000);

    }

</script>
