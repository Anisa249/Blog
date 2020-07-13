<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Rogue Code</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Main Styles -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

</head>

<body>
<div id="container" class="width">

  <header> 
    <div class="width">

      <h1>
        <a href="http://roguecode.in/">Rogue Code</a>
      </h1>

      <nav>
            <ul class="sf-menu dropdown">
                <li class="selected"><a href="index.html">Home</a></li>
                <li><a href="examples.html">Bootstrap</a>
                    <ul>
                    <li><a href="three-column.html">Bootstrap 3</a></li>
                    <li><a href="one-column.html">Bootstrap 4</a></li>
                    </ul>
                </li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Exercises</a>
                    <ul>
                    <li><a href="#">Python Exercises</a></li>
                    <li><a href="#">SQL Exercises</a></li>
                    <li><a href="#">CSS Exercises</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>

          <div class="clear"></div>
      </nav>
    </div>

    <div class="clear"></div>  
  </header>


    <div id="intro">

    <div class="width">
      
        <div class="intro-content">
    
                    <h2>Rogue Code Academy IT Training </h2>
                    <p>We Code, We Compile, We Run.</p>
                                    
            <p><a href="#" class="button button-slider"> Borivali</a>
                            <a href="#" class="button button-reversed button-slider"> Kandivali</a></p>
                    

                </div>
                
            </div>
            

    </div>

    <div id="body" class="width">
        <section id="content" class="two-column with-right-sidebar">
        <article>
            <h2>What are Servers and how do they hold data?</h2>
            <div class="article-info">Posted on <time datetime="2013-05-14">14 May</time> by <a href="#" rel="author">Victoria</a></div>

        <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<script type="text/javascript">

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


</script>


            <p>“How do servers work?” is more than just sharing a bit of trivial pursuit info….  Servers work through a fairly simple system of request and response serving up pages of web content that you’ve requested (their work).</p>

            <p> Without servers, the world-wide-web simply wouldn’t be able to exist. Every time you open a new web page or do some online shopping, an array of near-instant processes are taking place in a server somewhere. Servers are the powerhouses of the online experience, working to deliver all the elements, widgets and visuals we take for granted on<span id="dots">...</span><span id="more"> even the simplest website.  It’s also great basic information to have before you choose a hosting account for your business.  Savvy shoppers know what servers need to do – and what servers to avoid.    

           In this piece, we’re going to break down exactly how a server works, looking at what happens when someone types in a website address onwards. We’ll also cover the different types of servers out there and which factors make for the best server hosting performance.</span></p>
            
        
        <a onclick="myFunction()" id="myBtn" class="button">Read more</a><br>

        <script>
        function myFunction() 
        {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");

          if (dots.style.display === "none")
          {
           dots.style.display = "inline";
           btnText.innerHTML = "Read more"; 
           moreText.style.display = "none";
          } 
          else 
          {
           dots.style.display = "none";
           btnText.innerHTML = "Read less"; 
           moreText.style.display = "inline";
          }

        }
        </script>

        <?php
            date_default_timezone_set(timezone_identifier);
            include 'comment_post.php'            
        ?>
      
        <?php
        echo"<form action='".setComments($conn)."' name="comments" method="POST" enctype="multipart/form-data" class="form">

            <a onclick="showCommentBox()" class="button">Comments</a>
            <div style="display:none;" id="commentBox">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">                
                    <label class="comment-label" for="comment">Comment:</label><br> 
                    <textarea class='comment-textarea' name="comment"  >
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" value="Submit" name="commentSubmit">
                </div>
            </div>  
        </form>"

        getComments($conn);
        ?>


        <script type="text/javascript">
        function showCommentBox() 
        {
          var commentDiv=document.getElementById('commentBox');
          if(commentDiv.style.display === "none")
          {
          commentDiv.style.display = "block";
          }
          else 
          {
          commentDiv.style.display = "none";
          }
        }
        </script>
        </article>

    
        <article class="expanded">

                    <h3>What are Servers</h3>
            <div class="article-info">Posted on <time datetime="2013-05-14">14 May</time> by <a href="#" rel="author">Victoria</a></div>

            <img src ="img4.jpg" 
             height="500" width="700"
             style="float: left; margin-right: 10px; margin bottom: 10px" > </a>

            <p>A server is a computer or system that provides resources, data, services, or programs to other computers, known as clients, over a network. In theory, whenever computers share resources with client machines they are considered servers. There are many types of servers, including web servers, mail servers, and virtual servers.An individual system can provide resources and use them from another system at the same time. This means that a device could be both a server and a client at the same time.</p>

            <p>Some of the first servers were mainframe computers or minicomputers. Minicomputers were much smaller than mainframe computers, hence the name. However, as technology progressed, they ended up becoming much larger than desktop computers, which made the term microcomputer somewhat farcical.Initially, such servers were connected to clients known as terminals that did not do any actual computing. These terminals, referred to as dumb terminals, existed simply to accept input via a keyboard or card reader and to return the results of any computations to a display screen or printer. The actual computing was done on the server.</p>

            <p>As technology has evolved, the definition of a server has evolved with it. These days, a server may be nothing more than software running on one or more physical computing devices. Such servers are often referred to as virtual servers. Originally, virtual servers were used to increase the number of server functions a single hardware server could do. Today, virtual servers are often run by a third-party on hardware across the Internet in an arrangement called cloud computing.A server may be designed to do a single task, such as a mail server, which accepts and stores email and then provides it to a requesting client. Servers may also perform several tasks, such as a file and print server, which both stores files and accepts print jobs from clients and then sends them on to a network-attached printer.</p>

            <h3>How does a Server work</h3>

            

            <p>On the most basic level, when you type in a URL in your Internet browser (like Chrome, Safari or Explorer), your computer communicates with the server hosting that website to get the data to pull the site up on your machine.First, your browser breaks down a URL into three parts:</p>


             <img src ="https://www.knownhost.com/blog/wp-content/uploads/2019/02/Dns.jpg" 
             height="200" width="300"
             style="float: left; margin-right: 30px; margin bottom: 5px; margin-top: 0px" > </a>

            
            <ol class="styledlist">
                <li>The protocol ("http"): The hypertext transfer protocol, or HTTP, is the language that browsers and Web servers use to speak to each other.</li>
                <li>The server name ("www.chartercollege.edu"): The Domain Name System, or DNS, translates the domain name that you know into a numerical internet protocol (IP) address.</li>
                <li>The file name ("web-server.html"): The file name relates to all files like images, computer language stylesheets (like CSS and HTML), fonts and more, that are relevant to a particular website.</li>
            </ol>

            <p>The browser translates the server name into an IP address and the IP address is how a browser connects to the Web server. Your browser connects to the server at that specific IP address.Your IP address is assigned by your Internet service provider and most change each time you log on. But a server always has the same IP address. This is how your browser uses a Web server’s IP address to access a website’s specific <span id="dots1">...</span><span id="more1"> HTML code so that you can pull up the site. Once your machine and the Web server connect, your browser sends a request to the server asking for the particular file. This is the specific page within a website that you’ve included in the URL you typed in your browser.

            When your browser has connected to the server at the right IP address, the server sends all the HTML text for the Web page you requested to your browser. From there, your browser converts the data into the Web page that pops up on your screen. What’s amazing is that this all happens in seconds!All that information is exchanged and you land on the exact Web page you want.</span></p>

        <a onclick="myFunction1()" id="myBtn1" class="button">Read more</a>

        <script>
        function myFunction1() 
        {
           var dots = document.getElementById("dots1");
           var moreText = document.getElementById("more1");
           var btnText = document.getElementById("myBtn1");

           if (dots.style.display === "none")
           {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
           } 
           else 
           {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            moreText.style.display = "inline";
           }

         }
        </script>

        <form action="comment_post.php" name="comments" method="post" enctype="multipart/form-data" class="form">

            <a onclick="showCommentBox1()" class="button">Comments</a>
            <div style="display:none;" id="commentBox1">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">                
                    <label class="comment-label" for="comment">Comment:</label><br> 
                    <textarea class='comment-textarea' name="comment"  >
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" value="Submit">
                </div>
            </div>  
        </form>

        <script type="text/javascript">
        function showCommentBox1() 
        {
          var commentDiv=document.getElementById('commentBox1');
          if(commentDiv.style.display === "none")
          {
          commentDiv.style.display = "block";
          }
          else 
          {
          commentDiv.style.display = "none";
          }
        }
        </script>

        </article>
        </section>

 
        <aside class="sidebar big-sidebar right-sidebar">
    
    
            <ul>    
               <li>
                    <ul class="blocklist">
                        <li><a class="selected" href="#">Our Courses</a></li>
                        <li><a href="https://www.w3docs.com/">Python</li></a>
                        <li><a href="https://www.w3docs.com/">Web Design & Development</a></li>
                        <li><a href="https://www.w3docs.com/">SPA/C</a></li>
                        <li><a href="https://www.w3docs.com/">JAVA</a></li>
                        <li><a href="https://www.w3docs.com/">Machine Learning</a></li>
                        <li><a href="https://www.w3docs.com/">C++</a></li>
                        <li><a href="https://www.w3docs.com/">Data Structures</a></li>
                        <li><a href="https://www.w3docs.com/">Graphic Designing</a></li>
                        <li><a href="https://www.w3docs.com/">Android Development</a></li>
                    </ul>
                </li>
                
               

        
               
                <li>
            <h4>Services</h4>
            <ul class="newslist">
                <li>
                    <p><span class="newslist-date">Rogue Code Academy:</span>
                               We give practical and hands-on training in many programmimg languages.</p>
                </li>

                <li>
                    <p><span class="newslist-date">Web Design:</span>
                               Give your business a chance to stand out, we develop websites that make people fall in love with your services, products, etc</p>
 
                </li>

                 <li>
                    <p><span class="newslist-date">Digital Marketing:</span>
                               Gone are the days of door-to-door sales. Nowadays we find our services on Google, Social Media Apps, etc. We provide solutions and consulting that is tailored to the size and potential of your business.</p>
                </li>

            </ul>
                </li>
    
        <li>
                    <h4>Latest Articles</h4>
                    <ul>
                <li><a href="#">What is Javascript</a></li>
                <li><a href="#">What is Github</a></li>
                <li><a href="#">What is SQL</a></li>
                <li><a href="#">What is Full-stack JS</a></li>
                <li><a href="#">What is Roadmap</a></li>
            </ul>
                </li>
                
            </ul>
        
        </aside>
        <div class="clear"></div>
    </div>
</div>

    <footer>
        <div class="footer-content width">
            <ul>
                <li><h4>About</h4></li>
                <!--<li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Blandit elementum</a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>-->
            </ul>
            
            <ul>
                <li><h4>Portfolio</h4></li>
                <!--<li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Cras dictum</a></li>-->
            </ul>

        <ul>
                <li><h4>Blog</h4></li>
                <!--<li><a href="#">Morbi hendrerit libero </a></li>
                <li><a href="#">Proin placerat accumsan</a></li>
                <li><a href="#">Rutrum nulla a ultrices</a></li>
                <li><a href="#">Curabitur sit amet tellus</a></li>
                <li><a href="#">Donec in ligula nisl.</a></li>-->
            </ul>




       <button onclick="topFunction()" id="myBtn2" title="Go to top">Top</button>

<script type="text/javascript">
//Get the button:
mybutton = document.getElementById("myBtn2");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>






            
            <ul class="endfooter">
                <li><h4>Pages</h4></li>
<li>

<div class="social-icons">

<a href="#"><i class="fa fa-facebook fa-2x"></i></a>

<a href="#"><i class="fa fa-twitter fa-2x"></i></a>

<a href="#"><i class="fa fa-youtube fa-2x"></i></a>

<a href="#"><i class="fa fa-instagram fa-2x"></i></a>

</div>

</li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YourSite 2014. <a href="http://zypopwebtemplates.com/">Free CSS Web Templates</a> by ZyPOP</p>
         </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
  </body>
</html>

  <!-- end #page




>>>>>>> cd847aff1045d80b967066ba60ba219aa76730af:index.html
