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