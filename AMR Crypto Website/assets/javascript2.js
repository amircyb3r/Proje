 // بخش ایمیل و خبرنامه
 const form = document.querySelector('.email-form');
 const emailInput = form.querySelector('input[type="email"]');
 
 form.addEventListener('submit', (event) => {
   event.preventDefault();
 
   const enteredEmail = emailInput.value;
 
   alert(`ایمیل ${enteredEmail} با موفقیت ثبت شد. آخرین اخبار و بروزرسانی‌های پروژه برای شما ارسال خواهد شد. از شما متشکریم که در این مسیر همراه ما هستید`);
 
   emailInput.value = "";
 });

 const formm = document.querySelector("form");

formm.addEventListener("submit", (event) => {
  event.preventDefault();
  
  // گرفتن مقدار فرم و الرت کردن
  const fullName = document.getElementById("fullname").value;
  const phone = document.getElementById("phone").value;
  const email = document.getElementById("email").value;
  const nationality = document.getElementById("nationality").value;
  const workTypeRadio = document.querySelectorAll("input[name=work-type]");
  let workType = "";
  for (let i = 0; i < workTypeRadio.length; i++) {
    if (workTypeRadio[i].checked) {
      workType = workTypeRadio[i].value;
      break;
    }
  }
  const skills = document.getElementById("skills").value;
  const message = document.getElementById("message").value;

 
  const summary = `نام و نام خانوادگی: ${fullName}\nشماره تلفن: ${phone}\nایمیل: ${email}\nملیت: ${nationality}\nشرایط حضور فعالیت: ${workType}\nمهارت‌ها: ${skills}\nتوضیحات بیشتر: ${message}`;
  alert(`اطلاعات شما با موفقیت ثبت شد\n\n${summary}`);
  
 
  formm.reset();
});


// ولیدیت کردن فرم

function validateForm() {
  var fullname = document.getElementById("fullname").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var nationality = document.getElementById("nationality").value;
  var workTypeInputs = document.querySelectorAll('input[name="work-type"]');
  var skills = document.getElementById("skills").value;

  var isValid = true;

  
  if (fullname == "" || phone == "" || email == "" || nationality == "" || skills == "") {
    alert("لطفا تمامی فیلدهای  را پر کنید.");
    isValid = false;
  }

  
  if (!/^\d{10}$/.test(phone)) {
    alert("شماره تلفن وارد شده معتبر نیست. لطفا فقط از اعداد استفاده کنید.");
    isValid = false;
  }


  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert("آدرس ایمیل وارد شده معتبر نیست.");
    isValid = false;
  }

  
  var workTypeSelected = false;
  for (var i = 0; i < workTypeInputs.length; i++) {
    if (workTypeInputs[i].checked) {
      workTypeSelected = true;
      break;
    }
  }

  if (!workTypeSelected) {
    alert("لطفا حداقل یک شرایط حضور فعالیت خود را انتخاب کنید.");
    isValid = false;
  }

  return isValid;
}


var submitButton = document.querySelector('input[type="submit"]');
submitButton.addEventListener("click", function(e) {
  if (!validateForm()) {
    e.preventDefault();
  }
});