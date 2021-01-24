<?php
include("Header.php");
?>

<?php
             $sql="SELECT * FROM about";
             $result=$conn->query($sql);
             while($row=$result->fetch_assoc())
                    {
                        $About_us=$row['About_us'];
                        $Team_Bytewise=$row['Team_Bytewise'];
                        $Our_vision=$row['Our_vision'];
                        $Paragraph1=$row['A'];
                        $Paragraph2=$row['About_2'];
                    }
?>


<!-- MAIN -->
<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">About Us</h1>
            <p class="margin-bottom-0 text-size-16"><?php echo $About_us; ?></p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line">  
            <h2 class="text-size-40 margin-bottom-30">Team Bytewise:</h2>
            <hr class="break-small background-primary margin-bottom-30">
            <p>
            <?php echo $Team_Bytewise; ?>
            </p> 
            <blockquote class="margin-top-bottom-20">
              <h3 class="text-size-20 text-line-height-1 margin-bottom-15">Our Vision:</h3>
              <?php echo $Our_vision; ?>
            </blockquote>
            
            <div class="line margin-top-30">
              <div class="margin">
                <div class="s-12 m-6 l-6">
                  <img src="img/img-01.jpg" alt="">
                  <p class="margin-top-30">
                  <?php echo $Paragraph1; ?>
                  </p>
                </div>
                <div class="s-12 m-6 l-6">
                  <img src="img/img-02.jpg" alt="">
                  <p class="margin-top-30">
                  <?php echo $Paragraph2; ?>
                  </p>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>

<?php
include("Footer.php");
?>