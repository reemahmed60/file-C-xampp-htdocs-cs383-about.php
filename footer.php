<!--- Footer -->

<style>
         /* Modify the background color */

         .row-padding-box{
             background-color: #ccf5ff
;
             border:3px
         }
         .row-padding-box-1{
             background-color: #f1e9e4;
             border:3px
         }

         .container-fluid-padding{

           background-color: #eeeeee;

         }
         .row-padding-box2{

            text-align:center;

         }



         .social-text-lg-left > a {
           font-size:24px;
           width:40px;
           height:40px;
           line-height:40px;
           display:inline-block;
           text-align:center;
           border-radius:50%;
           border:1px solid #ccc;
           margin:0 8px;
           color:inherit;
           opacity:0.75;

         }


          .list-inline-text-lg-left{
           padding:0;
           list-style:none;
           text-align:center;
           font-size:18px;
           line-height:1.6;
           margin-bottom:0;
           display:inline-block;

            color:inherit;

         }
         .list-inline-item{
            color:#ffffff;
         }



     </style>

  <div class="container-fluid-padding">
    <div class="row row-padding-box2" >
    <div class="col-lg-6 ">
      <br>
       <footer>
         <div class="social-text-lg-left"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
           <ul class="list-inline-text-lg-left">
<br>
               <li class="list-inline-item" ><a href="about.php"  style="color:gray">About</a></li>
               <li class="list-inline-item"><a href="#" style="color:gray">Terms</a></li>
               <li class="list-inline-item"><a href="#" style="color:gray">Privacy Policy</a></li>
           </ul>
         </div>
           <div class="col-lg-5">
                <h5 class="text-lg-left">Contact Us</h5>
                <hr>


                <form action="contact.php" method="post">
                    <fieldset class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" name="message" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" name="sendContact" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


       </footer>
