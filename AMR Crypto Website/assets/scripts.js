
// محاسبه قیمت توکن
function calculateUSDT() {
  var tokenPrice = document.getElementById("tokenprice").value;
  var usdtPrice = tokenPrice * 0.8;
  document.getElementById("usdtprice").value = usdtPrice;
}

function calculateToken() {
  var usdtPrice = document.getElementById("usdtprice").value;
  var tokenPrice = usdtPrice / (8/10);
  document.getElementById("tokenprice").value = tokenPrice;
}

// توضیحات شرکای سرمایه گذار
const binanceImg = document.querySelector('#binance-img');
const coingeckoImg = document.querySelector('#coingecko-img');
const coinmarketcapImg = document.querySelector('#coinmarketcap-img');
const pinksaleImg = document.querySelector('#pinksale-img');


binanceImg.addEventListener('click', function() {
  alert("Binance یکی از بزرگترین صرافی‌های رمزارزی در جهان است که در سال ۲۰۱۷ توسط Changpeng Zhao تأسیس شد. این شرکت به کاربرانش خدمات متنوعی از جمله خرید و فروش رمزارز، نگهداری رمزارز، دسترسی به بورس رمزارزی و خدمات پرداخت را ارائه می‌دهد.");
});
coingeckoImg.addEventListener('click', function() {
  alert("CoinGecko یکی از پرطرفدارترین وبسایت‌های مرجع در حوزه‌ی رمزارزها است که اطلاعات جامعی از بازار رمزارزی در اختیار کاربران خود قرار می‌دهد. این وبسایت در سال ۲۰۱۴ تاسیس شده و فعالیت خود را با هدف ارائه‌ی آمار دقیق و جامع از بازار رمزارزی شروع کرد.");
});
coinmarketcapImg.addEventListener('click', function() {
 
  alert("CoinMarketCap در سال ۲۰۱۳ توسط Brandon Chez در وبسایتی به همین نام تاسیس شد. این وبسایت برای اولین بار با معرفی لیست قیمت برترین ارزهای دیجیتال در حال فعالیت بود. اما اکنون، CoinMarketCap به یک پلتفرم جامع تبدیل شده است که در آن اطلاعات مربوط به قیمت، حجم، تغییرات نرخ ارزهای دیجیتال و بیشتر در دسترس قرار می‌گیرد.");
});
pinksaleImg.addEventListener('click', function() {
  alert(" با داشتن تیمی از متخصصین مجرب در حوزه کریپتواسکن ها، با ارائه‌ی خدماتی مانند مبادله، نگهداری ارزهای دیجیتال و خدمات پرداخت، به کاربرانش کمک می‌کند تا به بهترین شکل ممکن در بازار رمزارزی عمل کنند.");
});

// دکمه پرش به بالای صفحه
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("floating-button").style.display = "block";
  } else {
    document.getElementById("floating-button").style.display = "none";
  }
}

document.getElementById("floating-button").onclick = function() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};


  // فیلتر ورودی بخش محاسبه قیمت توکن
  document.getElementById("tokenprice").addEventListener("input", function(event) {
    let value = event.target.value;
    value = value.replace(/[^0-9\.]/g, ''); 
    event.target.value = value;
  });
  
  document.getElementById("usdtprice").addEventListener("input", function(event) {
    let value = event.target.value;
    value = value.replace(/[^0-9\.]/g, '');
    event.target.value = value;
  });

    // بخش ایمیل و خبرنامه
    const form = document.querySelector('.email-form');
    const emailInput = form.querySelector('input[type="email"]');
    
    form.addEventListener('submit', (event) => {
      event.preventDefault();
    
      const enteredEmail = emailInput.value;
    
      alert(`ایمیل ${enteredEmail} با موفقیت ثبت شد. آخرین اخبار و بروزرسانی‌های پروژه برای شما ارسال خواهد شد. از شما متشکریم که در این مسیر همراه ما هستید`);
    
      emailInput.value = "";
    });

    