@extends('layout.main')
@push('title')
    <title>
        Home
    </title>
@endpush

@section('main-section')
    <div>
        <!-- Home -->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Hello, This is</div>
                    <div class="text-2">Amit Mandal</div>
                    <div class="text-3">And I'm a Fullstack Developer<span class="typing"></span></div>
                    <a href="tel:9382370394">Hire Me</a>
                </div>
            </div>
        </section>

        <!--  About  -->
        <section class="about" id="about">
            <div class="max-width">
                <h2 class="title">About Me</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="https://source.unsplash.com/626x626/?profile" alt="Profile Image 626x626">
                    </div>
                    <div class="column right">
                        <div class="text">I'm Amit Mandal and I'm a Fullstack Developer <span class="typing-2"></span>
                        </div>
                        <p>Seeking an entry-level opportunity with an esteemed organization where I can utilize my
                            skills & enhance learning in the field of work. Capable of mastering new technologies.</p>
                        <br>
                        <div class="text">Why Work With Me</div>
                        <p>I'm a great communicator & love to invest the necessary time to understand the customer's
                            problem very well.</p>

                        <a href="#link" target="blank">Download CV</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services" id="services">
            <div class="max-width">
                <h2 class="title">My services</h2>
                <div class="serv-content">
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-laptop-code"></i>
                            <div class="text">Web Design</div>
                            <p>Your Next Web Developer, who is working in Shopify Dropshipping Stores, High Converting
                                Ecommerce stores, Product Page also having Custom code, liquid template design.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-user-secret"></i>
                            <div class="text">User Secret</div>
                            <p>I ensures that, there is no sensitive data included in the source code and are stored
                                outside of the project folder. And all the data which is stored by User Secrets is not
                                encrypted.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <i class="fas fa-code"></i>
                            <div class="text">Apps Design</div>
                            <p>I encompasses both the user interface(UI) & user experience(UX). The overall style of the
                                app, including things like the colour scheme, font selection, and the types of buttons
                                and widgets which will use.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="skills" id="skills">
            <div class="max-width">
                <h2 class="title">My Skills</h2>
                <div class="skills-content">
                    <div class="column left">

                        <div class="text">INTERNSHIP</div>
                        <p>
                            <li class="intern">#Company Name "Where You work"</li>
                            <li class="intern">#Company Name "Where You work"</li>
                            <li class="intern">#Company Name "Where You work"</li>
                        </p>

                        <br>
                        <div class="text">PROJECT</div>

                        <p>
                            <li class="project">Portfolio (HTML, CSS, js, Bootstraps)</li>
                            <li class="project">eCommerce Website (Shopify liquid-code, HTML, CSS)</li>
                            <li class="project">QuickShop - eCommerce Website (Like Amazon, Flipkart etc.)</li>
                            <li class="project">Fully Responsive Design Email Subscribe form</li>
                            <li class="project">Blog (HTML, CSS, Bootstraps)</li>
                            <li class="project">Currently Working on a Messaging App (Like WhatsApp)</li>
                        </p>

                        <br>
                        <div class="text">DEVELOPMENT SKILLS</div>

                        <p>
                            I'm familiar & work on a daily basis with HTML, CSS, JavaScript, Bootstrap, React js and
                            other modern frameworks.
                        </p>
                        <a href="https://aistechx.com/" target="blank">Get Educate...</a>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>MERN Fullstack</span>
                                <span>90%</span>
                            </div>
                            <div class="line python"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Next JS</span>
                                <span>80%</span>
                            </div>
                            <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>React Native</span>
                                <span>60%</span>
                            </div>
                            <div class="line css"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>PHP, Laravel</span>
                                <span>40%</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Tailwindui, Chakra UI, MUI</span>
                                <span>60%</span>
                            </div>
                            <div class="line bootstraps"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>HTML, CSS, Bootstraps,Django, Python, JAVA</span>
                                <span>70%</span>
                            </div>
                            <div class="line django"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects" id="projects">
            <div class="max-width">
                <h2 class="title">My Projects</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?shopping" alt="">
                            <div class="text">Ecommerce</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?portfolio" alt="">
                            <div class="text">Portfolio</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?blog" alt="">
                            <div class="text">Blog</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?messanger" alt="">
                            <div class="text">Messaging App</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?app-clone" alt="">
                            <div class="text">Clone</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://source.unsplash.com/720x600/?code,demo" alt="">
                            <div class="text">Demo</div>
                            <p>#Project Details:- Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact Me</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Feel free to get in touch with me. I am always open to discussing new projects, creative
                            ideas or opportunities to be a part of your visions. Email me with any questions or
                            inquiries. I'll happy to answer your questions and set up a meeting with you.</p>
                        <div class="icons">

                            <a href="https://instagram.com/aistscience">
                                <div class="row">
                                    <i class="fa-solid fa-user-large"></i>
                                    <div class="info">
                                        <div class="head">Name</div>
                                        <div class="sub-title"><a href="https://aistechx.com/"
                                                style="text-decoration: none; color: #333;"> Akash Mahapatra</a></div>
                                    </div>
                                </div>
                            </a>

                            <div class="row">
                                <i class="fa-solid fa-location-dot"></i>
                                <div class="info">
                                    <div class="head">&nbsp;Address</div>
                                    <div class="sub-title">&nbsp;ABC, 123 Lane, India</div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="fa-solid fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title"><a href="mailto:#"
                                            style="text-decoration: none; color: #333;"> example@example.com</a></div>
                                </div>
                            </div>

                            <div class="row">
                                <i class="bi bi-translate"></i>
                                <div class="info">
                                    <div class="head">Language Known</div>
                                    <div class="sub-title">Hindi, English, Odia, Bengali</div>
                                </div>
                            </div>

                            <br>

                            <!-- Social -->
                            <div class="social-menu">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-github"></i></a>
                                    </li>
                                    <li><a href="#"><i
                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" title="Get Educate with Us"><i
                                                class="fa-solid fa-graduation-cap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Reach -->
                    <div class="column right">
                        <div class="text">Message me</div>
                        <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Your Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                            </div>
                            <div class="button-area">
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
