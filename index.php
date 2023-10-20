<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Taola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/decIndex.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    </script>
  </head>
  <body>
    <header>

      <section class="section-logo">
           <img   src="images/logo2.jpg" style="width:120px;height:100px;margin-top:-38px;" alt="Taola-Consulting">
          <div class="Logoname">
            <a href="index.php"><p>TAOLA CONSULTING(PTY)LTD</p></a>
          </div>
      </section>
      <section class = "section-nav">
           <nav>
             <ul>
              <li><a href = "index.php">Home</a></li>
              <li><a href = "frontpages/about.php">About Us</a></li>
              <li><a href = "#">Services</a>
                <ul>
                   <li><a href = "frontpages/accounting.php">Accounting Division</a></li>
                   <li><a href = "frontpages/tax.php">Taxation Division</a></li>
                   <li><a href = "frontpages/audit.php">Internal Audit Division</a></li>
                 </ul>
              </li>
              <li><a href = "frontpages/contact.php">Contact</a></li>
             </ul>
           </nav>
      </section>
    </header>
    <br>
    <br>
    <h1 class="welcome-h">Profesional Accounting, Tax and Auditing Services for Business and Individuals.</h1><br><br>
    <section class="organizeIndex">



  </section>
  <script>

  function myFunction1()
   {
    document.getElementById("expandAcc").innerHTML = "* Preparation of ARS. <br> * Review of ARS. <br> * Preparation and review of asset register. <br> *  GRAP/IFRS and Modified Cash Standards training.";
  }


  function myFunction2()
   {
    document.getElementById("expandTax").innerHTML = "*Income Tax registration.<br>*	VAT Registration.<br>*Income tax Returns.<br>*	VAT Returns.<br>*Advising on legislation and various forms of tax.<br>* Calculation of Tax liability.";
  }

  function myFunction3()
   {
    document.getElementById("expandAudit").innerHTML = "* Risk based internal audit services.<br>*	External audit serives.";
  }
  </script>



    <div class="services-box">
      <p>We offer the following services</p>
    </div><br><br>
    <section class="ourservices">

      <article class="accountingService">

          <button class = "btnexpand" type="button" name="button" onclick = "myFunction1()" ><i class='fas fa-angle-double-down'></i>  Accounting </button><br><br>
         <p  id ="expandAcc"  >
         </p>
       </article>

    <article class="taxservice">
         <button  class = "btnexpand" type="button" name="button" onclick = "myFunction2()"><i class='fas fa-angle-double-down'></i>  Taxation  </button><br><br>
       <p id = "expandTax">
       </p>
    </article>
    <article class="auditservice">

        <button class = "btnexpand" type="button" name="button" onclick = "myFunction3()"><i class='fas fa-angle-double-down'>  Internal Audit </i></button><br><br>
       <p  id = "expandAudit" >

       </p>
    </article>

  </section>



    <footer class="footer-bottom">
            <section class="section-footer">
              <article class="articleFindus">
                <h1>FIND US</h1> <br>
                <p> South Africa <br>
                    Limpopo <br>
                    Polokwane <br>
                    44 Bendor Ridge<br>
                    outspan, drive<br>
                    Polokwane,0700 <br>
                </p>
                 <p></p>
              </article>
              <article class="contactdetails">
                <h1>CONTACT DETAILS</h1><br>
                 <p>
                    Cellphone: +27780285042 <br><br>
                    Cellphone: +27761388498<br><br>
                    Email    : motshwane.j@gmail.com
                </p>

              </article>
              <article class="mediaAccess">
                <h1>FOLLOW US ON</h1><br>
                <a href="#"> <img style="width:40px;height:40px; border-radius:60px;margin-left:0px;" src="images/twitterCircle.png" alt="TwitterProfile"></a>
                <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="images/in.png" alt="linkedInProfile"></a>
                <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="images/facebooklogo2.jpg" alt="facebookProfile"></a>
              </article>

            </section>

    </footer>
  </body>
</html>
