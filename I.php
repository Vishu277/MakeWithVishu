
<!DOCTYPE html>
<!-- === Coding by vishu | MakeWithVishu=== -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="google-site-verification" content="QJ6vyYETghdJRErI0htotIN5AgO3RM4hSDhNZbXGETU" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@290&family=Raleway:wght@511&family=Roboto+Serif:wdth,wght@82.9,542&display=swap" rel="stylesheet"> -->
    <!-- ===== CSS ===== -->
        
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <style type="text/css" media="all">
       /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    transition: all 0.4s ease;;
}


/* ===== Colours ===== */
:root{
    --body-color: #E4E9F7;
    --nav-color: #4070F4;
    --side-nav: #010718;
    --text-color: #FFF;
    --search-bar: #F2F2F2;
    --search-text: #010718;
}

body{
    height: 100vh;
    background-color: var(--body-color);
}

body.dark{
    --body-color: #18191A;
    --nav-color: black;
    --side-nav: black;
    --text-color: #CCC;
    --search-bar: #242526;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 70px;
    width: 100%;
    background-color: var(--nav-color);
    z-index: 100;
}

body.dark nav{
  /*  border: 1px solid #393838;*/
}

nav .nav-bar{
    position: relative;
    height: 100%;
    max-width: 1000px;
    width: 100%;
    background-color: var(--nav-color);
    margin: 0 auto;
    padding: 0 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

nav .nav-bar .sidebarOpen{
    color: var(--text-color);
    font-size: 25px;
    padding: 5px;
    cursor: pointer;
    display: none;
}

nav .nav-bar .logo a{
    font-size: 25px;
    font-weight: 500;
    color: var(--text-color);
    text-decoration: none;
}

.menu .logo-toggle{
    display: none;
}

.nav-bar .nav-links{
    display: flex;
    align-items: center;
}

.nav-bar .nav-links li{
    margin: 0 5px;
    list-style: none;
}

.nav-links li a{
    position: relative;
    font-size: 17px;
    font-weight: 400;
    color: var(--text-color);
    text-decoration: none;
    padding: 10px;
}

.nav-links li a::before{
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 6px;
    width: 6px;
    border-radius: 50%;
    background-color: var(--text-color);
    opacity: 0;
    transition: all 0.3s ease;
}

.nav-links li:hover a::before{
    opacity: 1;
}

.nav-bar .darkLight-searchBox{
    display: flex;
    align-items: center;
}

.darkLight-searchBox .dark-light,
.darkLight-searchBox .searchToggle{
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 5px;
}

.dark-light i,
.searchToggle i{
    position: absolute;
    color: var(--text-color);
    font-size: 22px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.dark-light i.sun{
    opacity: 0;
    pointer-events: none;
}

.dark-light.active i.sun{
    opacity: 1;
    pointer-events: auto;
}

.dark-light.active i.moon{
    opacity: 0;
    pointer-events: none;
}

.searchToggle i.cancel{
    opacity: 0;
    pointer-events: none;
}

.searchToggle.active i.cancel{
    opacity: 1;
    pointer-events: auto;
}

.searchToggle.active i.search{
    opacity: 0;
    pointer-events: none;
}

.searchBox{
    position: relative;
}

.searchBox .search-field{
    position: absolute;
    bottom: -85px;
    right: 5px;
    height: 50px;
    width: 300px;
    display: flex;
    align-items: center;
    background-color: var(--nav-color);
    padding: 3px;
    border-radius: 6px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.searchToggle.active ~ .search-field{
    bottom: -74px;
    opacity: 1;
    pointer-events: auto;
}

.search-field::before{
    content: '';
    position: absolute;
    right: 14px;
    top: -4px;
    height: 12px;
    width: 12px;
    background-color: var(--nav-color);
    transform: rotate(-45deg);
    z-index: -1;
}

.search-field input{
    height: 100%;
    width: 100%;
    padding: 0 45px 0 15px;
    outline: none;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 400;
    color: var(--search-text);
    background-color: var(--search-bar);
}

body.dark .search-field input{
    color: var(--text-color);
}

.search-field i{
    position: absolute;
    color: var(--nav-color);
    right: 15px;
    font-size: 22px;
    cursor: pointer;
}

body.dark .search-field i{
    color: var(--text-color);
}

@media (max-width: 790px) {
    nav .nav-bar .sidebarOpen{
        display: block;
    }

    .menu{
        position: fixed;
        height: 100%;
        width: 320px;
        left: -100%;
        top: 0;
        padding: 20px;
        background-color: var(--side-nav);
        z-index: 100;
        transition: all 0.4s ease;
    }

    nav.active .menu{
        left: -0%;
    }

    nav.active .nav-bar .navLogo a{
        opacity: 0;
        transition: all 0.3s ease;
    }

    .menu .logo-toggle{
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo-toggle .siderbarClose{
        color: var(--text-color);
        font-size: 24px;
        cursor: pointer;
    }

    .nav-bar .nav-links{
        flex-direction: column;
        padding-top: 30px;
    }

    .nav-links li a{
        display: block;
        margin-top: 20px;
    }
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #EEECEB;
}
footer{
  position: fixed;
 /* background: #140B5C;*/
   background: black;
  width: 100%;
  bottom: 0;
  left: 0;
}
footer::before{
  content: '';
  position: absolute;
  left: 0;
  top: 100px;
  height: 1px;
  width: 100%;
  background: #AFAFB6;
}
footer .content{
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}
.content .top .logo-details{
  color: #fff;
  font-size: 30px;
}
.content .top .media-icons{
  display: flex;
}
.content .top .media-icons a{
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
  background: #4267B2;
}
.top .media-icons a:nth-child(1):hover{
  color: #4267B2;
  background: #fff;
}
.top .media-icons a:nth-child(2){
  background: #1DA1F2;
}
.top .media-icons a:nth-child(2):hover{
  color: #1DA1F2;
  background: #fff;
}
.top .media-icons a:nth-child(3){
  background: #E1306C;
}
.top .media-icons a:nth-child(3):hover{
  color: #E1306C;
  background: #fff;
}
.top .media-icons a:nth-child(4){
  background: #0077B5;
}
.top .media-icons a:nth-child(4):hover{
  color: #0077B5;
  background: #fff;
}
.top .media-icons a:nth-child(5){
  background: #FF0000;
}
.top .media-icons a:nth-child(5):hover{
  color: #FF0000;
  background: #fff;
}
footer .content .link-boxes{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .box{
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name{
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .box .link_name::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}
.content .link-boxes .box li{
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .box li a{
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease
}
.content .link-boxes .box li a:hover{
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box{
  margin-right: 55px;
}
.link-boxes .input-box input{
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #AFAFB6;
  background: #140B5C;
  background: white;
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder{
 color: black;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"]{
  background: #151f6b;
  color: black;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover{
  opacity: 1;
}
footer .bottom-details{
  width: 100%;
 /* background: #0F0844;*/
 background: black;
}
footer .bottom-details .bottom_text{
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a{
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}
.bottom-details .bottom_text a:hover{
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a{
  margin-right: 10px;
}
@media (max-width: 900px) {
  footer .content .link-boxes{
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box{
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px){
  footer{
    position: relative;
  }
  .content .top .logo-details{
    font-size: 26px;
  }
  .content .top .media-icons a{
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 12px;
  }
}
@media (max-width: 520px){
  footer::before{
    top: 145px;
  }
  footer .content .top{
    flex-direction: column;
  }
  .content .top .media-icons{
    margin-top: 16px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 100%;
  }
}
.vishu {
  height: 80px;
  width: 100%;
  background: BLACK;
}
.vishu h1{
  margin: 70px;
  text-align: center;
  color: white;
  font-size: 20px;
  font-weight: 580;
  /* opacity: 0.6; */
}
body{
  background: black;
}
 .container {
         display: flex;
         flex-wrap: wrap;
         padding-left: 10px;
         padding-right: 10px;
         justify-content: center;
      }
           .container > div {
         background: #212121;
         width: 600px;
         height: 5100px;
         color: white;
        border-radius: 10px;  
        font-family: 'Roboto', sans-serif;
           }
          .card{
      box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
         box-sizing: border-box;
         font-family: sans-serif;
        }
        .card h3{
       font-weight: 400;
       font-size: 25px;
      
        } 
        .card p{
        font-size: 12.5px;
        font-weight: 499;
        }
        .card img{
          text-align: center;
        }
        .ht{
          margin-top: 40px;
        }
        .ht h4{
      font-weight: 430;
      font-size: 17px;
        }
        .ht img{
          border: 9px solid black;
        }
        .ht div{
          text-align: center;
        }
        .ff{
         border: 5px solid #212121;
         border-radius: 10px;
          padding-right: 7px;
          padding-left: 3px;
        }
        .q{
          display: inline-block;
        }
        .w{
          display: inline-block;
          position: absolute;
          top: 220px;
        } 
        .c h4{
          font-weight: 450;
          font-size: 23px;
        }
        .c p{
          font-weight: 450;
          
        }
    .c li{
        font-size: 12.5px;
        font-weight: 499;
     }
        .fd{
          text-align: center;
        }
        .fd img{
          border: 9px solid black;
        }
        .result{
          background: #b39f62;
          border: 3px solid black;
          margin: 15px;
        }
        .bulbi li{
         font-size: 12.5px;
         font-weight: 499;
        }
        .bulbi ul{
          padding: 12px;
        }
        .bulb{
          text-align: center;
        }
        .bulb div{
          background: #f7ed2f;
          margin-left: 15px;
          margin-right: 15px;
          border: 3px solid silver;
        }
        .boat h1{
          font-size: 30px;
          font-weight: 500;
        }
        .od h3{
          font-size: 12.9px;
          font-weight: 500;
          color: green;
         }
        .boat p{
          font-weight: 450;
        }
        .od li{
        font-size: 12.5px;
        font-weight: 499;
        }
        .ood div{
          text-align: center;
        }
     </style>
    <title>Html tutorial #1</title>
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">MakeWithVishu</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">MakeWithVishu</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="content.html">Contact</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="Login.html">Login</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                 <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="vishu">
         <h1><br />Html5 Totorial</h1>
    </div>
    <div class="container">
      <div class="card">
        <br />
   <div class="ff">
           <h3 style="font-weight: 400;color:#239a34;text-indent: 11px;
       font-size: 25px; font-weight: 10;"> HTML5 Totorial</h3>
       <br />
      <div class="q">
        <img class="id" src="html5.jpg" alt="html5" height="100px"/>
      <div class="w">
        <br />
        <p>With HTML you can create your own Web site. <br />This Totorial teaches you everything about Html. <br /> Html is easy to learn -    You <br /> will enjoy it.</p>
      </div>
      </div> 
       <br />
   <br />   
  <div class="ht">
     <h4>Examples in every chapter</h4> 
     <br />
     <p>This Html totorial contains hundred of Html examples and the result.</p>
     <br />
  <div>
    <h3>Example</h3>
     <img src="html.jpg" alt="Html examples" height="200px" width="300px"/>
  </div>  
  </div>
     <br />
     <hr />
     <br />
     <br />
     <div class="c">
        <h3 style="font-weight: 400;color:#239a34; font-size: 30px;">HTML Introdution</h3>
        <br />
        <h4>What is Html?</h4>
        <br />
        <p>Html is a markup language for descibing web document (web page).</p>
        <br />
        <li>
          Html stands for Hyper Text Markup Language.
        </li>
        <li>
          A markup language is a set of markup tags.
        </li>
        <li>
          HTML document are described by HTML tags.
        </li>
        <li>
          Each HTML tag describes different document content
        </li>
        <div class="fd">
          <br />
          <h4>Html Example</h4>
          <br />
      <img src="html.jpg" alt="Html examples" height="180px" width="300px"/>
      <div class="result">
        <p>Result</p>
        <br />
        <h2>My First Webpage</h2>
        <br />
        <p>This is a paragraph...</p>
      </div>
      <br />
      <div style="text-align:left;" class="bulbi">
        <h4>Example Explained</h4>
        <br />
        <ul>
           <li> 
        The Doctype declaration define the document type.
        </li>
        <li>
          The text between html opening tag and html closing tag describes the web document.
        </li>
        <li>
              The text between body opening tag and body closing tag describes the visible page content.
        </li>
        <li>
    The text between h1 opening tag and h1 closing tag describes a heading
        </li>
        <li>
        The text between p opening tag and p closing tag describes paragraph
        </li>
        </ul>
        <br />
        <p>Using the description, a web browser can display a document with a heading and a paragraph</p>
      </div>
        </div>
     </div>
     <br />
      <div class="bulb">
        <div>
               <p>Note-: The start tag is often called the opening tag. The end tag is often called the closing tag.</p>
          </div>
      </div>
            <div class="boat">
              <br />
         <h1>Html Tags</h1>    
         <br />
         <p>HTML tags are keywords (Tag names) surrounded by angle brackets:</p>
         <br />
         <div class="od">
                <h3>Tagname opening+content+Tagname closing</h3>
                <br />
                <li>
                  Html tag normally come in pairs like p opening tag and p closing tag.
                </li>
                <li>
                  The first tag in a pair is the start tag, the second tag is the end tag.
                </li>
                <li>
                  The end tag is written like the start tag, but with a slash before the tag name.
                </li>
         </div>
         <br />
         <div class="ood">
           <h2>Web Browsers</h2>
           <p>The purpose of web Browser (chrome, IE, Firefox, Safari) is to read Html documents and display them.</p> <br /> 
           <p>The Browser does not display the Html tags, but uses them to display the document:</p>
           <br />
           <div>
          <img src="browser.jpg" alt="browser show html" height="230px" width="300px"/> 
           </div>
         </div>
          </div>      
   </div>
     </div>
    </div>
    </div>
    <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">MakeWithVishu</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="bx bxl-facebook-square"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-linkedin-square"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright ?? 2021 <a href="#">MakeWithVishu.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="p.html">Privacy policy</a>
          <a href="t.html">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
<script>

const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>

</body>
</html>

