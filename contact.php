<?php
include("Header.php");
?>

<!-- MAIN -->
<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contact Us</h1>
            <p class="margin-bottom-0 text-size-16">We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions, please don't hesitate to contact us.<br>
            For further queries leave us a message below in the form we'll reach to your message as soon as possible. </p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-location-pin icon3x text-primary"></i>
                  </div>
                <div class="margin-left-70 margin-s-left-0 margin-bottom">
                  <h3 class="margin-bottom-0">Company Address</h3>
                  <p>IJP Jinnah Road 67/2 Aveneu<br>
                  Islamabad / Pakistan / Asia
                  </p>               
                </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>byte@wise.com<br>
                       support@bytwise.com
                    </p>              
                  </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Phone Numbers</h3>
                    <p><span class="text-primary">Info-line: 051-6788-32</span><br>
                       Office 1: 0335 0555 099<br>
                       Office 2: 0304 5164 228
                    </p>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line">
            <div class="margin">
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="margin-bottom-10">Leave Message</h2>
                <form name="contactForm" class="customform" method="post">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" required="" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" required="" class="name" placeholder="Your name" title="Your name" type="text" />
                        <p class="name-error form-error">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" required="" class="subject" placeholder="Subject" title="Subject" type="text" />
                    <p class="subject-error form-error">Please enter the subject.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" required="" class="required message" placeholder="Your message" rows="3"></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <div class="s-12"><button name="btn" class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
                </form>
              </div>
              <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10">Office Hours</h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Monday<br>
                  Tuesday<br>
                  Wednesday<br>
                  Thursday<br>
                  Friday<br>
                  Saturday<br>
                  Sunday
                  </p>
                </div>
                <div class="s-6">
                  <p class="text-size-16 text-strong">
                  08:00 am - 05:00 pm<br>
                  08:00 am - 05:00 pm<br>
                  08:00 am - 05:00 pm<br>
                  08:00 am - 05:00 pm<br>
                  08:00 am - 04:00 pm<br>
                  08:00 am - 04:00 pm<br>
                  Close
                  </p>
                </div>
              </div>
            </div>    
          </div>  
        </div> 
      </article>
    </main>

<?php
if(isset($_POST['btn']))
{
    $email= $_POST['email'];
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    $sql="INSERT INTO contact(E_mail,Name,Subject,Message) VALUES('$email','$name','$subject','$message')";
    if($conn->query($sql)===TRUE)
        {
          echo '<script language="javascript">';
          echo 'alert("Message Successfully Sent! We will reach to your Message ASAP")';
          echo '</script>';
          exit;
        }

        else
        {
          echo '<script language="javascript">';
          echo 'alert("We are facing a Technical Issue please try again later!")';
          echo '</script>';
        }
}
?>


<?php
include("Footer.php");
?>
