<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Zachary Foutz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zachary Foutz - Zafuzi Industries">
    <meta name="description" content="Zachary Foutz is a web engineer with over 5 years of experience. He specializes in front end design and mobile conversions. He can write PHP, Javscript, Python, and Java. If you need a modern website, Zach is your guy.">
    <meta name="keywords" content="web, web-developer, developer, web design, web designer, web developer for hire, developer for hire, bremerton, washington, bremerton washington, bremerton developer, bremerton web developer, bremerton web developer for hire, seattle developer, seattle web developer, seattle web developer for hire, seattle web, bremerton web, expert web developer, expert web designer, find a web developer, what does a web developer do, web programmer, web developer information">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8">
    <link rel="stylesheet" href="bower_components/normalize-css/normalize.css">
    <link rel="stylesheet" href="./bower_components/typicons.font/src/font/typicons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
	<script>
	  (function (w,d,s,o,f,js,fjs) {
	  w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments) };
	  js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
	  js.id = o; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs);
	  }(window, document, 'script', 'plausible', 'https://plausible.io/js/p.js'));

	  plausible('page')
	</script>
</head>

<body>
    <section id="intro">
        <div id="intro_message">
            <div class="grid name">
                <figure class="profile"><img src="images/profile.jpg" alt="Zachary Foutz profile picture"></figure>
                <h1 style="margin: 0;">Zachary Foutz 
                    <p style="padding: 0; margin: 0; text-align: center; font-size: 1rem; font-weight: normal;">Web Developer specializing in UX design</p>
                </h1>
            </div>
            <hr/>
            <div class="contact" style="padding: 0; margin: 0;">
                <div class="row" style="text-align: center;">
                    <p><a href="tel:+13609900694">(360)990-0694</a></p>
                    <p><a href="mailto:zacharyfoutz@gmail.com">zacharyfoutz@gmail.com</a></p>
                    <a class="github-button"  style="margin: 0 auto;" href="https://github.com/zafuzi" data-size="large" data-show-count="true" aria-label="Follow @zafuzi on GitHub">@zafuzi on Github</a>
                </div>
            </div>
        </div>
    </section>
    <section id="s1">
        <div class="card">
            <div id="education">
                <h2 class="row">Education</h2>
                <div>
                    <h4>Olympic College | 2014 - Current</h4>
                    <p>AAS-T Web Development</p>
                    <p>AAS-T Programming</p>
                </div>
                <div>
                    <h4>Udacity | 2014</h4>
                    <p>Front End Developer Nanodegree</p><a href="./images/nd-grad-cert.pdf" target="_blank">Download Certificate</a></div>
            </div>
        </div>
    </section>
    <section id="s2">
        <div class="card">
            <h2>Work</h2>
            <div class="gallery">
                <div class="project">
                    <div><img class="img-responsive" src="images/sleepless_nodes.png"></div>
                    <div>
                        <h3 class="link"> <a href="http://nodes.sleepless.con" target="_blank"><span>Sleepless Nodes</span></a></h3>
                        <p class="url">nodes.sleepless.com</p>
                        <p class="description">Sleepless Nodes is a site that allows anyone to upload a zip file and have it converted into a live website in seconds</p>
                    </div>
                </div>
                <div class="project">
                    <div><img class="img-responsive" src="images/pcpas_screenshot.png"></div>
                    <div>
                        <h3 class="link"> 
                            <a href="http://www.zfoutz.com/clients/pcpas" target="_blank">PC Parts and Services</a>
                        </h3>
                        <p class="url">www.zfoutz.com/clients/pcpas/</p>
                        <p class="description">PC Parts and Service is a local computer repair store that wanted a modern clean interface for their new one page site.</p>
                    </div>
                </div>
                <div class="project">
                    <div><img class="img-responsive" src="images/newlyread_screenshot.png"></div>
                    <div>
                        <h3 class="link"> <a href="http://newlyread.com" target="_blank"> <span>NewlyRead</span></a></h3>
                        <p class="url">http://newlyread.com</p>
                        <p class="description">NewlyRead is a simple news site that pulls articles from reliable sources and strips out ads.</p>
                    </div>
                </div>
                <div class="project">
                    <div><img class="img-responsive" src="images/shearElegance_screenshot.png"></div>
                    <div>
                        <h3 class="link"><a href="http://www.zfoutz.com/clients/shear-elegance" target="_blank"><span>Shear Elegance</span></span></a></h3>
                        <p class="url">www.zfoutz.com/clients/shear-elegance/</p>
                        <p class="description">Shear Elegance is a website designed for a local hair salon.</p>
                    </div>
                </div>
                <div class="project">
                    <div><img class="img-responsive" src="images/jbventures_screenshot.png"></div>
                    <div>
                        <h3 class="link"> <a href="http://www.zfoutz.com/clients/jbventures" target="_blank"><span>Modern Studio Equipment</span></a></h3>
                        <p class="url">www.zfoutz.com/clients/jbventures/</p>
                        <p class="description">Modern Studio Equipment is a site that was built under contract from JB Ventures.</p>
                    </div>
                </div>
            </div>
            <h4 style="text-align: center;">Other Projects</h4>
            <small style="text-align: center; width: 100%; display: block;"> (These may be broken) </small>
            <ul id="misc_projects">
                <?php
                    $files = scandir("./projects");
                    foreach($files as $file) {
                        if(basename($file) != "." && basename($file) != "..") {
                            echo "<li style='background-image: url(./projects/" . $file . "/screenshot.png);'><a href=projects/$file>".basename($file)."</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
    </section>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-73276036-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            let uptimeChecker = [
                { 
                    name: "JBVentures",
                    url: "https://zfoutz.com/clients/jbventures/",
                    selector: "#uptime_jbventures"
                }, 
                {
                    name: "Shear Elegance",
                    url: "https://zfoutz.com/clients/shear-elegance",
                    selector: "#uptime_shear"
                }, 
                {
                    name: "Newly Read",
                    url: "http://newlyread.com",
                    selector: "#uptime_newlyread"
                },
                {
                    name: "PCPAS",
                    url: "http://zfoutz.com/clients/pcpas",
                    selector: "#uptime_pcpas"
                }
            ];
            uptimeChecker.forEach(uptime => {
                fetch("https://crossorigin.me/" + uptime.url)
                .then(response => {
                    var el = document.querySelector(uptime.selector);
                    switch(response.status){
                        case 502:
                            el.innerHTML = "status: down";
                            el.style.backgroundColor = 'red';
                            break;
        
                        case 200:
                            el.innerHTML = "status: ok";
                            el.style.backgroundColor = 'green';
                            break;
        
                        default:
                            el.innerHTML = "status: unknown";
                            el.style.backgroundColor = 'gray';
                            break;
                    }
                });
            });
        }, false);
    </script>
    <script type="text/javascript" src="bower_components/modernizer/modernizr.js"></script>
</body>

</html>
