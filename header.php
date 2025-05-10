<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="roshika_css.css">
        <link rel="stylesheet" href="roshni_css.css">
        <link rel="stylesheet" href="jay_css.css">

        <title>Responsive navigation bar - Bedimcode</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header">
            <nav class="nav container">
                <div class="nav__data">
                    <a href="index.php" class="nav__logo">
                        <i class="ri-code-s-slash-line"></i> UnstoppableCoders
                    </a>
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__toggle-menu"></i>
                        <i class="ri-close-line nav__toggle-close"></i>
                    </div>
                </div>

                <!--=============== NAV MENU ===============-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li>
                            <a href="/myproject/website/index.php" class="nav__link">Home</a>
                        </li>

                        <!--=============== DROPDOWN 1 ===============-->
                        <li class="dropdown__item">                      
                            <div class="nav__link dropdown__button">
                                Discover <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-flashlight-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Most viewed courses</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/most_viewed_courses/html_for_beginner.php" class="dropdown__link">HTML for beginners</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/most_viewed_courses/advanced_css.php" class="dropdown__link">Advanced CSS</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/most_viewed_courses/javascript_oops.php" class="dropdown__link">JavaScript OOP</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-heart-3-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Popular courses</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/popular_courses/android_development.php" class="dropdown__link">Development with Flutter</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/popular_courses/web_development.php" class="dropdown__link">Web development with React</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/popular_courses/cyber_security.php" class="dropdown__link">Cyber Security expert</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-book-mark-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Careers</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/careers/cloud-computing.php" class="dropdown__link">Cloud Computing</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/careers/data_science.php" class="dropdown__link">Data Science</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/Careers/devops.php" class="dropdown__link">DevOps</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-apps-2-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Others</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/blogs/recent_blogs.php" class="dropdown__link">Recent blogs</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/tutorial_videos.php" class="dropdown__link">Tutorial videos</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/webinar.php" class="dropdown__link">Webinar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--=============== DROPDOWN 2 ===============-->
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button">
                                Resources <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-code-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Web templates</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/web_templates/free_templates.php" class="dropdown__link">Free templates</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/web_templates/premium_templates.php" class="dropdown__link">Premium templates</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-pen-nib-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Designs</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/designs/web_designs.php" class="dropdown__link">Web designs</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/designs/app_designs.php" class="dropdown__link">App designs</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/designs/component_design.php" class="dropdown__link">Component design</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-apps-2-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Others</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/blogs/recent_blogs.php" class="dropdown__link">Recent blogs</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/tutorial_videos.php" class="dropdown__link">Tutorial videos</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/webinar.php" class="dropdown__link">Webinar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="/myproject/website/pricing.php" class="nav__link">Pricing</a>
                        </li>

                        <!--=============== DROPDOWN 3 ===============-->
                        <li class="dropdown__item">                        
                            <div class="nav__link dropdown__button">
                                Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-community-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">About us</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/company/what_we_do.php" class="dropdown__link">What We Do</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/company/who_we_are.php" class="dropdown__link">Who We Are</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/company/official_member.php" class="dropdown__link">official Members</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-shield-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Safety and quality</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/safety_and_quality/site_cookie.php" class="dropdown__link">Cookie settings</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/safety_and_quality/privacy_policy.php" class="dropdown__link">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-shield-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Contact Us</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="elearning/registration.php" class="dropdown__link">Student Registation </a>
                                            </li>
                                            <li>
                                                <a href="elearning/login.php" class="dropdown__link">Student Login </a>
                                            </li>
                                            <li>
                                                <a href="elearning/admin_login.php" class="dropdown__link">Admin Login </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-apps-2-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Others</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="/myproject/website/blogs/recent_blogs.php" class="dropdown__link">Recent blogs</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/tutorial_videos.php" class="dropdown__link">Tutorial videos</a>
                                            </li>
                                            <li>
                                                <a href="/myproject/website/blogs/webinar.php" class="dropdown__link">Webinar</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <style>
            #cover {
  position: fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background: #141526;
  z-index: 9999;
  font-size: 65px;
  text-align: center;
  padding-top: 200px;
  color: #fff;
  font-family:tahoma;
}

        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        
    <div id="cover"> <span class="glyphicon glyphicon-refresh w3-spin preloader-Icon"></span> loading...</div>
