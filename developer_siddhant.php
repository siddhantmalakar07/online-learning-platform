<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siddhant Malakar | Web Developer & Designer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #00ff9d;
      --secondary: #00b7ff;
      --dark: #121212;
      --light: #f5f5f5;
      --gray: #333;
      --light-gray: #444;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--dark);
      color: var(--light);
      overflow-x: hidden;
      position: relative;
    }

    #canvas-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      opacity: 0.3;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header */
    header {
      padding: 30px 0;
      position: relative;
      z-index: 10;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 28px;
      font-weight: 700;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-decoration: none;
      transition: transform 0.3s;
    }

    .logo:hover {
      transform: scale(1.05);
    }

    .nav-links {
      display: flex;
      gap: 30px;
    }

    .nav-links a {
      color: var(--light);
      text-decoration: none;
      font-weight: 500;
      position: relative;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary);
      transition: width 0.3s;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .menu-toggle {
      display: none;
      cursor: pointer;
      font-size: 24px;
    }

    /* Hero Section */
    .hero {
      height: 80vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .hero-content {
      max-width: 600px;
      z-index: 5;
    }

    .hero h1 {
      font-size: 3.5rem;
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .hero h1 span {
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: #ccc;
    }

    .btn {
      display: inline-block;
      padding: 12px 30px;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      color: var(--dark);
      border: none;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 15px rgba(0, 255, 157, 0.3);
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(0, 255, 157, 0.4);
    }

    /* About Section */
    .section {
      padding: 100px 0;
      position: relative;
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      border-radius: 2px;
    }

    .about-content {
      display: flex;
      gap: 50px;
      align-items: center;
    }

    .about-text {
      flex: 1;
    }

    .about-text h3 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: var(--primary);
    }

    .about-text p {
      margin-bottom: 20px;
      line-height: 1.6;
      color: #ccc;
    }

    .skills {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 30px;
    }

    .skill {
      background: var(--light-gray);
      padding: 8px 15px;
      border-radius: 20px;
      font-size: 0.9rem;
      transition: transform 0.3s;
    }

    .skill:hover {
      transform: translateY(-3px);
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      color: var(--dark);
      font-weight: 600;
    }

    .about-cube {
      flex: 1;
      height: 300px;
      position: relative;
      perspective: 1000px;
    }

    .cube {
      width: 200px;
      height: 200px;
      position: relative;
      transform-style: preserve-3d;
      animation: rotate 15s infinite linear;
      margin: 0 auto;
    }

    .face {
      position: absolute;
      width: 200px;
      height: 200px;
      border: 2px solid var(--primary);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(5px);
    }

    .front {
      transform: translateZ(100px);
    }

    .back {
      transform: rotateY(180deg) translateZ(100px);
    }

    .right {
      transform: rotateY(90deg) translateZ(100px);
    }

    .left {
      transform: rotateY(-90deg) translateZ(100px);
    }

    .top {
      transform: rotateX(90deg) translateZ(100px);
    }

    .bottom {
      transform: rotateX(-90deg) translateZ(100px);
    }

    @keyframes rotate {
      from {
        transform: rotateX(0) rotateY(0);
      }

      to {
        transform: rotateX(360deg) rotateY(360deg);
      }
    }

    /* Services Section */
    .services {
      background: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .service-card {
      background: var(--gray);
      padding: 30px;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      opacity: 0;
      z-index: -1;
      transition: opacity 0.3s;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0, 255, 157, 0.2);
    }

    .service-card:hover::before {
      opacity: 0.1;
    }

    .service-icon {
      font-size: 2.5rem;
      margin-bottom: 20px;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .service-card h3 {
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .service-card p {
      color: #ccc;
      line-height: 1.6;
    }

    /* Projects Section */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .project-card {
      background: var(--gray);
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0, 255, 157, 0.2);
    }

    .project-content {
      padding: 20px;
    }

    .project-card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .project-card p {
      color: #ccc;
      margin-bottom: 15px;
      line-height: 1.5;
    }

    .project-tech {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 15px;
    }

    .tech {
      background: var(--light-gray);
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 0.8rem;
    }

    .project-links {
      display: flex;
      gap: 15px;
    }

    .project-links a {
      color: var(--light);
      text-decoration: none;
      transition: color 0.3s;
    }

    .project-links a:hover {
      color: var(--primary);
    }

    /* Contact Section */
    .contact {
      background: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
    }

    .contact-container {
      display: flex;
      gap: 50px;
    }

    .contact-info {
      flex: 1;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .contact-icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: var(--primary);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(0, 255, 157, 0.1);
    }

    .contact-text h3 {
      font-size: 1.2rem;
      margin-bottom: 5px;
    }

    .contact-text p,
    .contact-text a {
      color: #ccc;
      text-decoration: none;
      transition: color 0.3s;
    }

    .contact-text a:hover {
      color: var(--primary);
    }

    .contact-form {
      flex: 1;
      background: var(--gray);
      padding: 30px;
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 12px 15px;
      background: var(--light-gray);
      border: none;
      border-radius: 5px;
      color: var(--light);
      font-size: 1rem;
    }

    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }

    /* Footer */
    footer {
      padding: 30px 0;
      text-align: center;
      background: rgba(0, 0, 0, 0.5);
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: var(--light-gray);
      color: var(--light);
      text-decoration: none;
      transition: transform 0.3s, background 0.3s;
    }

    .social-link:hover {
      transform: translateY(-3px);
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      color: var(--dark);
    }

    .copyright {
      color: #ccc;
      font-size: 0.9rem;
    }

    /* Animations */
    @keyframes float {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    .floating {
      animation: float 6s ease-in-out infinite;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .about-content {
        flex-direction: column;
      }

      .about-cube {
        margin-top: 50px;
      }

      .contact-container {
        flex-direction: column;
      }
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

      .nav-links {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        height: 100vh;
        background: var(--gray);
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: right 0.3s;
        z-index: 100;
      }

      .nav-links.active {
        right: 0;
      }

      .hero h1 {
        font-size: 2.5rem;
      }

      .section-title {
        font-size: 2rem;
      }
    }

    @media (max-width: 576px) {
      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .btn {
        padding: 10px 20px;
      }
    }
  </style>
</head>

<body>
  <div id="canvas-container"></div>

  <header>
    <div class="container">
      <nav>
        <a href="#" class="logo">Siddhant Malakar</a>
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="index.php">Back To Website</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="home" class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Hi, I'm <span>Siddhant Malakar</span></h1>
        <p>A passionate Web Developer & Designer from Kolkata, creating digital experiences that matter.</p>
        <a href="#contact" class="btn">Get In Touch</a>
      </div>
    </div>
  </section>

  <section id="about" class="section">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="about-content">
        <div class="about-text">
          <h3>Who am I?</h3>
          <p>I'm Siddhant Malakar, a web developer and designer based in Kolkata, India. With a passion for creating beautiful and functional websites, I specialize in front-end development and user experience design.</p>
          <p>My journey in web development started 5 years ago, and since then I've worked on various projects ranging from small business websites to complex web applications.</p>
          <p>When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying the vibrant culture of Kolkata.</p>

          <div class="skills">
            <span class="skill">HTML5</span>
            <span class="skill">CSS3</span>
            <span class="skill">JavaScript</span>
            <span class="skill">React</span>
            <span class="skill">Node.js</span>
            <span class="skill">Express</span>
            <span class="skill">MongoDB</span>
            <span class="skill">UI/UX Design</span>
            <span class="skill">Responsive Design</span>
            <span class="skill">Three.js</span>
          </div>
        </div>

        <div class="about-cube">
          <div class="cube">
            <div class="face front"><i class="fas fa-code"></i></div>
            <div class="face back"><i class="fas fa-laptop-code"></i></div>
            <div class="face right"><i class="fas fa-paint-brush"></i></div>
            <div class="face left"><i class="fas fa-mobile-alt"></i></div>
            <div class="face top"><i class="fas fa-database"></i></div>
            <div class="face bottom"><i class="fas fa-server"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="section services">
    <div class="container">
      <h2 class="section-title">My Services</h2>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-code"></i>
          </div>
          <h3>Web Development</h3>
          <p>Building responsive, fast, and scalable websites and web applications using modern technologies and best practices.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <h3>UI/UX Design</h3>
          <p>Creating intuitive and beautiful user interfaces that enhance user experience and drive engagement.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3>Responsive Design</h3>
          <p>Ensuring your website looks and works perfectly on all devices, from desktops to smartphones.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-search-dollar"></i>
          </div>
          <h3>SEO Optimization</h3>
          <p>Improving your website's visibility on search engines to attract more organic traffic.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          <h3>Performance Optimization</h3>
          <p>Making your website faster and more efficient to improve user experience and conversions.</p>
        </div>

        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-cogs"></i>
          </div>
          <h3>Maintenance & Support</h3>
          <p>Providing ongoing support and maintenance to keep your website up-to-date and secure.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="section">
    <div class="container">
      <h2 class="section-title">My Projects</h2>
      <div class="projects-grid">
        <div class="project-card">
          <div class="project-content">
            <h3>E-commerce Platform</h3>
            <p>A full-featured e-commerce platform with product management, cart functionality, and secure payments.</p>
            <div class="project-tech">
              <span class="tech">React</span>
              <span class="tech">Node.js</span>
              <span class="tech">MongoDB</span>
              <span class="tech">Stripe API</span>
            </div>
            <div class="project-links">
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
              <a href="#"><i class="fab fa-github"></i> Source Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-content">
            <h3>Portfolio Template</h3>
            <p>A customizable portfolio template for creatives and developers with 3D animations and dark mode.</p>
            <div class="project-tech">
              <span class="tech">HTML/CSS</span>
              <span class="tech">JavaScript</span>
              <span class="tech">Three.js</span>
              <span class="tech">GSAP</span>
            </div>
            <div class="project-links">
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
              <a href="#"><i class="fab fa-github"></i> Source Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-content">
            <h3>Task Management App</h3>
            <p>A productivity app for managing tasks with drag-and-drop functionality and team collaboration features.</p>
            <div class="project-tech">
              <span class="tech">Vue.js</span>
              <span class="tech">Firebase</span>
              <span class="tech">Tailwind CSS</span>
            </div>
            <div class="project-links">
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
              <a href="#"><i class="fab fa-github"></i> Source Code</a>
            </div>
          </div>
        </div>

        <div class="project-card">
          <div class="project-content">
            <h3>Weather Dashboard</h3>
            <p>A weather application that displays current conditions and forecasts using data from multiple APIs.</p>
            <div class="project-tech">
              <span class="tech">React</span>
              <span class="tech">OpenWeather API</span>
              <span class="tech">Chart.js</span>
            </div>
            <div class="project-links">
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
              <a href="#"><i class="fab fa-github"></i> Source Code</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section contact">
    <div class="container">
      <h2 class="section-title">Get In Touch</h2>
      <div class="contact-container">
        <div class="contact-info">
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-text">
              <h3>Location</h3>
              <p>Dewas ,Madhya Pradesh , India</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-text">
              <h3>Email</h3>
              <a href="mailto:debasish@example.com">smalakarsws@gmail.com</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="contact-text">
              <h3>Phone</h3>
              <a href="tel:+919876543210">+91 81039 48997</a>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="contact-text">
              <h3>Working Hours</h3>
              <p>Monday - Friday: 9am - 6pm</p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="email">Your Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="social-links">
        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
      </div>
      <p class="copyright">© 2023 Siddhant Malakar. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script>
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        if (navLinks.classList.contains('active')) {
          navLinks.classList.remove('active');
        }
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    // 3D Background Animation with Three.js
    const canvasContainer = document.getElementById('canvas-container');
    // Scene
    const scene = new THREE.Scene();
    // Camera
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 30;
    // Renderer
    const renderer = new THREE.WebGLRenderer({
      alpha: true,
      antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    canvasContainer.appendChild(renderer.domElement);
    // Particles
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 1000;
    const posArray = new Float32Array(particlesCount * 3);
    for (let i = 0; i < particlesCount * 3; i++) {
      posArray[i] = (Math.random() - 0.5) * 100;
    }
    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particlesMaterial = new THREE.PointsMaterial({
      size: 0.2,
      color: 0x00ff9d,
      transparent: true,
      opacity: 0.8,
      blending: THREE.AdditiveBlending
    });
    const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(particlesMesh);
    // Torus Knot
    const torusKnotGeometry = new THREE.TorusKnotGeometry(10, 3, 100, 16);
    const torusKnotMaterial = new THREE.MeshBasicMaterial({
      color: 0x00b7ff,
      wireframe: true,
      transparent: true,
      opacity: 0.5
    });
    const torusKnot = new THREE.Mesh(torusKnotGeometry, torusKnotMaterial);
    scene.add(torusKnot);
    // Animation
    function animate() {
      requestAnimationFrame(animate);
      particlesMesh.rotation.x += 0.0005;
      particlesMesh.rotation.y += 0.0005;
      torusKnot.rotation.x += 0.01;
      torusKnot.rotation.y += 0.01;
      renderer.render(scene, camera);
    }
    animate();
    // Handle window resize
    window.addEventListener('resize', () => {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
    // Scroll animations
    const sections = document.querySelectorAll('.section');

    function checkScroll() {
      sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (sectionTop < windowHeight * 0.75) {
          section.style.opacity = '1';
          section.style.transform = 'translateY(0)';
        }
      });
    }
    // Initial state for scroll animations
    sections.forEach(section => {
      section.style.opacity = '0';
      section.style.transform = 'translateY(50px)';
      section.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    window.addEventListener('scroll', checkScroll);
    window.addEventListener('load', checkScroll);
  </script>
</body>

</html>