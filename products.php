<?php
include("Header.php");
?>

<?php
             $sql="SELECT * FROM products";
             $result=$conn->query($sql);
             while($row=$result->fetch_assoc())
                    {
                        $Our_Products=$row['Our_Products'];
                        $Our_Finest_Work=$row['Finest_Work'];
                        $Color_Variants=$row['Color_Variants'];
                        $Parallax_Background=$row['Parallax_Background'];
                        $Clean_Code=$row['Clean_Code'];
                    }
?>

<!-- MAIN -->
<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Our Products</h1>
            <p class="margin-bottom-0 text-size-16"><?php echo $Our_Products; ?></p>
          </div>  
        </header>
        <section class="section background-white">
          <div class="line">
            <h2 class="text-size-40 margin-bottom-30">Our Finest Work:</h2>
            <hr class="break-small background-primary margin-bottom-30">
            <p class="margin-bottom-40">
            <?php echo $Our_Finest_Work; ?>
            </p>
          </div>   
          <div class="line text-center">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-shield icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Unlimited Color Variants</h2>
                  <p class="margin-bottom-30"><?php echo $Color_Variants; ?></p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-umbrella icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Parallax Background</h2>
                  <p class="margin-bottom-30"><?php echo $Parallax_Background; ?></p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x background-primary">
                  <i class="icon-sli-home icon3x text-white margin-bottom-30"></i>
                  <h2 class="text-thin">Clean Modern Code</h2>
                  <p class="margin-bottom-30"><?php echo $Clean_Code; ?></p>
                  <a class="button button-white-stroke text-size-12" href="/">GET MORE INFO</a>
                </div>
              </div>
            </div>
          </div>
        </section> 
      </article>
    </main>

    <?php
    include("Footer.php");
    ?>