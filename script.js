function check(){
    var name = document.forms.webpage.Name.value;
    var email = document.forms.webpage.Email.value;
    var phone = document.forms.webpage.Phone.value;
    var desc = document.forms.webpage.Desc.value;
    
    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  
    var regPhone=/^\d{10}$/;                                        
    var regName = /\d+$/g;
    
    if (name == "" || regName.test(name)) {
            window.alert("Please enter your name properly, "+name);
            
            return false;
    }
    
    if (email == "" || !regEmail.test(email)) {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
    }
    
    if (phone == "" || !regPhone.test(phone)) {
            alert("Please enter valid phone number.");
            phone.focus();
            return false;
    }
    
    if (desc == "" || regName.test(name)) {
            window.alert("Please enter a description.");
            desc.focus();
            return false;
    }
    
    alert("First name: "+name);
    alert("Email: "+email);
    alert("Phone: "+phone);
    alert("Description: "+desc);
    }
    
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
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
    function f1()
            {
                var e = document.getElementById("b3");
                if (e.value=="Change"){
                    e.value = "Change it back";
                    document.getElementById("demo").innerHTML= "New Content!";
                }
                else{
                    e.value = "Change";
                    document.getElementById("demo").innerHTML= "Change this content by clicking the button below:";
                }
            }
            function f2()
            {
                var e = document.getElementById("b1");
                if (e.value=="Date and Time") e.value = "Update";
                document.getElementById('demo3').innerHTML=Date();
            }
            function f3(){
                var n = (100 * Math.random());
                document.getElementById('no').innerHTML=("j-" + n.toFixed(0));//Can use Math.floor as well
                var e = document.getElementById("b2");
                if (e.value=="View") e.value = "Change it";
            }
            function f4()
            {
                const message = document.getElementById("p1");
                message.innerHTML = "";
                let x = document.getElementById("in").value;
                try { 
                    if(x.trim() == "")  throw "empty";
                    if(isNaN(x)) throw "not a number";
                    x = Number(x);
                    if(x < 5)  throw "too low";
                    if(x > 10)   throw "too high";
                }
                catch(err) {
                    message.innerHTML = "Input is " + err;
                }
            }
