

const dfk =new Date().getDay();

const currentDate = new Date();
document.getElementById("date").innerHTML = "امروز: " + currentDate.toDateString();
let imageSource;

switch(dfk) {
	case 0:
        document.getElementById("dfk").innerHTML = "یک شنبه ی خوب و شادی داشته باشید";
        imageSource="yek.jpg";
		break;
	case 1:
		document.getElementById("dfk").innerHTML = "دوشنبه ای آرام را برای شما آرزو مندیم";
        imageSource="do.jpg";
		break;
	case 2:
		document.getElementById("dfk").innerHTML = "سه شنبه ی پرانرژی ای داشته باشید";
        imageSource="se.jpg";
		break;
	case 3:
		document.getElementById("dfk").innerHTML = "چهارشنبه شما پر از برکت";
        imageSource="cha.jpg";
		break;
	case 4:
		document.getElementById("dfk").innerHTML = "پنج شنبه ی عالی ای داشته باشید";
        imageSource="pan.jpg";
		break;
	case 5:
		document.getElementById("dfk").innerHTML = "جمعه شما مبارک باشد";
        imageSource="jom.jpg";
		break;
	case 6:
		document.getElementById("dfk").innerHTML = "شنبه ای پر از نشاط داشته باشید";
        imageSource="shanb.jpg";
		break;
	default:
		document.getElementById("dfk").innerHTML ="خطا: روز معتبر نیست";
}


document.getElementById("image").setAttribute("src", imageSource);