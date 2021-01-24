<?php
include("Header.php");
?>

    <?php
             $sql="SELECT * FROM main";
             $result=$conn->query($sql);
             while($row=$result->fetch_assoc())
                    {
                        $Vision=$row['Vision'];
                        $Color_Variants=$row['Color_Variants'];
                        $Parallex_Background=$row['Parallex_Background'];
                        $Clean_Code=$row['Clean_Code'];
                        $About_Paragraph1=$row['About'];
                        $About_Paragraph2=$row['About2'];
                        $Unlimited_Variant=$row['Unlimited_Variant'];
                        $Responsive_Layout=$row['Responsive_Layout'];
                        $Clean_Design=$row['Clean_Design'];
                        $Animated_Elements=$row['Animated_Elements'];
                        $Many_More=$row['Many_More'];
                    }
    ?>

<!-- MAIN -->
<main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/B_Header.jpg" alt="Bytewise Header" style="height:614px;">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
                    <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Bytewise is More than a Bite<br> We make IT Happen!</h1>
                    <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40"><?php echo $Vision; ?></p></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <a class="button button-white-stroke s-12" href="/">Get Started Now</a>
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-shield icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Unlimited Color Variants</h2>
                <p class="margin-bottom-30"><?php echo $Color_Variants; ?></p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-umbrella icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Parallax Background</h2>
                <p class="margin-bottom-30"><?php echo $Parallex_Background; ?></p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-home icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Clean Modern Code</h2>
                <p class="margin-bottom-30"><?php echo $Clean_Code; ?></p>
                <a class="button button-dark-stroke text-size-12" href="/">GET MORE INFO</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">About Us</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-2">
              <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">We Are<br> ByteIT Heroes</p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 margin-m-bottom-30 text-dark"><?php echo $About_Paragraph1; ?></p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 text-dark"><?php echo $About_Paragraph2; ?></p>
            </div>
          </div>
        </div>    
      </section>
      
      <!-- Section 2 -->
      <section class="full-width">
        <div class="s-12 m-12 l-6">  
          <img src="img/img-12.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <div class="padding-2x">
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-drop icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Unlimited Color Variants</h3>
                <p class="text-dark"><?php echo $Unlimited_Variant; ?></p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-screen-smartphone icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Responsive Layout</h3>
                <p class="text-dark"><?php echo $Responsive_Layout; ?></p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-heart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Clean Minimalistic Design</h3>
                <p><?php echo $Clean_Design; ?></p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-chart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Tons of Animated Elements</h3>
                <p><?php echo $Animated_Elements; ?></p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-globe-alt icon3x text-dark"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-size-25 margin-bottom-0">And many more...</h3>
                <p class="text-dark"><?php echo $Many_More; ?></p>            
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white" >  
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">Our Stats</h2>
          <hr class="break-small background-primary break-center">
          <div class="margin margin-top-bottom-50">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50  text-m-size-40">1500</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Web Designs</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50  text-m-size-40">95%</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Budget Reduction</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50  text-m-size-40">287</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Happy Clients</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50  text-m-size-40">7 milion</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Libraries</p> 
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
      <section class="section-top-padding full-width">
        <h2 class="text-size-50  text-m-size-40 text-center">Our Work</h2>
        <hr class="break-small background-primary break-center"> 
        <div class="tabs background-primary-hightlight">
            <div class="tab-item tab-active">
              <a class="tab-label active-btn">Web Design</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img\Porfolio\portfolio-02.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 1" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img\Porfolio\portfolio-02.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 2" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img\Porfolio\portfolio-02.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 3" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-05.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 4" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img\Porfolio\portfolio-02.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 5" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-11.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 6" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-12.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 7" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img\Porfolio\portfolio-02.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img\Porfolio\portfolio-02.jpg" alt="" title="Portfolio Image 8" />
                  </a>	
                </div>
              </div>  
            </div>
            <div class="tab-item">
              <a class="tab-label">Graphic Design</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/video.mp4">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-04.jpg" alt="" title="Portfolio Image 1" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-06.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-06.jpg" alt="" title="Portfolio Image 2" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-13.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-13.jpg" alt="" title="Portfolio Image 3" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-05.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-05.jpg" alt="" title="Portfolio Image 4" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/video.mp4">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-12.jpg" alt="" title="Portfolio Image 5" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-14.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-14.jpg" alt="" title="Portfolio Image 6" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-07.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-07.jpg" alt="" title="Portfolio Image 7" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/video.mp4">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-10.jpg" alt="" title="Portfolio Image 8" />
                  </a>	
                </div>
              </div>  
            </div>
            <div class="tab-item">
              <a class="tab-label">Content Writing</a>
              <div class="tab-content lightbox-gallery">
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-03.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-03.jpg" alt="" title="Portfolio Image 9" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-01.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-01.jpg" alt="" title="Portfolio Image 10" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/video.mp4">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-09.jpg" alt="" title="Portfolio Image 11" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-14.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-14.jpg" alt="" title="Portfolio Image 12" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-07.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-07.jpg" alt="" title="Portfolio Image 13" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-13.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-13.jpg" alt="" title="Portfolio Image 14" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/video.mp4">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-11.jpg" alt="" title="Portfolio Image 15" />
                  </a>	
                </div>
                <div class="s-12 m-6 l-3">
                  <a class="image-with-hover-overlay image-hover-zoom" href="img/portfolio/portfolio-04.jpg">
                    <div class="image-hover-overlay background-primary"> 
                      <div class="image-hover-overlay-content text-center padding-2x">
                        <h2 class="text-thin">Lorem Ipsum Dolor</h2> 
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. Autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p> 
                      </div> 
                    </div> 
                    <img src="img/portfolio/thumb-04.jpg" alt="" title="Portfolio Image 16" />
                  </a>	
                </div>
              </div>  
            </div>
         </div>
      </section>
      
      <!-- Section 5 -->    
      <section class="section background-white text-center">
        <div class="line">
          <h2 class="text-size-50  text-m-size-40 text-center">Testimonials</h2>
          <hr class="break-small background-primary break-center">
          <div class="carousel-default owl-carousel carousel-wide-arrows">
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Usman.png" alt="Usman Niazi-CEO" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"If you work hard, stay motivated, even success will await for your failures."</p>
                <p class="h1 text-size-16">Usman Niazi / CEO / Bytewise</p>
              </div>
            </div>
            <div class="item"> 
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Hadi.png" alt="Hadi Butt-Web Developer" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"Success is like being pregnant everybody congragulates you but no one knows how many times you've been fucked."</p>
                <p class="h1 text-size-16">Hadi Butt / Web Developer / Bytewise</h5>
              </div>
            </div>
            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Ahtisham.png" alt="Ahtisham-Android Developer" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"My favourite dessert? Jelly Beans, KitKat etc."</p>
                <p class="h1 text-size-16">Muhammad Ahtisham / Android Developer / Bytewise</p>
              </div>
            </div>

            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Zubair.png" alt="Zubair-Back-End Developer" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"Life is easy when you acknowledge your failures."</p>
                <p class="h1 text-size-16">Muhammad Zubair / Back-End Developer / Bytewise</p>
              </div>
            </div>

            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Obaid.png" alt="Obaid-Graphic Designer" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"Art is an illustration of the soul embedded inside you."</p>
                <p class="h1 text-size-16">Obaid Ahmed Khan / Graphic Designer / Bytewise</p>
              </div>
            </div>

            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Ubaid.png" alt="Ubaid-Editor" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"Everything is difficult until it finds me!"</p>
                <p class="h1 text-size-16">Ubaid-Ur-Rehman / Senior Editor / Bytewise</p>
              </div>
            </div>

            <div class="item">
              <div class="s-12 m-12 l-7 center text-center">
                <img class="image-testimonial-small" src="Cropped-Pics/Abdullah.png" alt="Abdullah-Python" style="height:130px;">
                <p class="h1 margin-bottom text-size-20">"One Day or Day One you decide."</p>
                <p class="h1 text-size-16">Abdullah Durrani / Python Engineer / Bytewise</p>
              </div>
            </div>

          </div>
        </div>
      </section>
    </main>

<?php
include("Footer.php");
?>