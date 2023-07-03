function val(){
  
    var name =document.getElementById('name').value;
    var phone =document.getElementById('phone').value;
    var email =document.getElementById('email').value;
    var tozih =document.getElementById('tozih').value;
    var onvan =document.getElementById('onvan').value;
    var filee =document.getElementById('inputGroupFile02').value;


    console.log("نام وارد شده توسط کاربر:", name);
    console.log("شماره تماس کاربر:", phone);
    console.log("ایمیل کاربر:", email);
    console.log("توضیحات کاربر:", tozih);
    console.log("مشخصات فایل ارسالی:", filee);


    
    if (onvan==1) {
        console.log("موضوع درخواست:انتقاد");
    }
        else if (onvan==2) {
            console.log(" موضوع درخواست : پیشنهاد ");
        }
        else if (onvan==2) {
            console.log(" موضوع درخواست : پیشنهاد ");
        }
        else if (onvan==3) {
            console.log(" موضوع درخواست : درخواست ");
        }
        else if (onvan==4) {
            console.log(" موضوع درخواست : رزومه ");
        }

    swal("با موفقیت ثبت شد", "ممنون از شما", "success");
}