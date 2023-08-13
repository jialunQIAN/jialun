$(document).ready(function () {

    let apiUrl = "http://192.168.50.5:8000/api"


    setInterval(function () {
        $('#v3d-container a').hide()
    }, 200)

   try{
       var mySwiper = new Swiper('.swiper', {
           direction: 'horizontal', // 垂直切换选项
           loop: true, // 循环模式选项
           autoplay: true,
           slidesPerView: 3,
       })
   }catch (e) {

   }

    $.ajax({
        url:apiUrl+"/about",
        type: "GET",
        dataType: "json",
        success: function (data) {
             $(".aboutHtml").append(data.data)
            console.error(data)
        }
    });
    $.ajax({
        url:apiUrl+"/contact",
        type: "GET",
        dataType: "json",
        success: function (data) {
            $(".contactHtml h2").append(data.data)
            console.error(data)
        }
    });

});
