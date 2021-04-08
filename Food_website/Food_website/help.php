<HTML>
<HEAD>
<TITLE>Help & FAQ</TITLE>
<style type="text/css">
	*{font-family: 'Roboto', sans-serif;}
   a:link {color: #ffffff}
   a:visited {color: #ffffff}
   a:hover {color: #ffffff}
   a:active {color: #ffffff}
#grad {
background: linear-gradient(to right, aqua , white);
}
	#panel, #flip {
    padding: 2px;
    text-align: left;
}
#panel1,#panel2,#panel3,#panel4,#panel5,#panel6,#voucher{
    display:none;
 }
.ptr {
    text-decoration: none;
    cursor: pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip4").click(function(){
        $("#panel4").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip5").click(function(){
        $("#panel5").slideToggle("slow");
    });
});
</script>
<script>
$(document).ready(function(){
    $("#flip6").click(function(){
        $("#panel6").slideToggle("slow");
    });
});
$(document).mouseup(function (e)
{
    var container = $(".panel");
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide("slow");
    }
});
$(document).ready(function(){
    $("#banner").mouseenter(function(){
		$("#voucher").show();
        $("#voucher").animate({left: '500px'});
    });
});
</script>
<script>
$(document).ready(function(){
    $("#banner").dblclick(function(){
        alert("Error!!! You have double clicked. Please retry.");
    });
});
$(document).ready(function(){
    $("#voucher").mousedown(function(){
        var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($("#voucher").text()).select();
	document.execCommand("copy");
	$temp.remove();
    });
});
</script>
</HEAD>
<BODY background="u2.jpg">
<?php include("header.php"); ?>
<TABLE width="1200" height="440" style="border-width:4px; border-style:dashed;border-color:#0000CC;border-radius: 25px;" align="center" id="grad">
<CAPTION><FONT color="white" size="5">Информация</FONT></CAPTION>
<TR><TD>
<FONT size="4" face="Tahoma">
<UL>
<LI><SECTION id="flip1" class="ptr">Куда вы доставляете?</SECTION>
<div id="panel1" class="panel">
Мы осуществляем доставку в следующие регионы:<BR>
1)Центральный р-н<BR>
2)Северо-западный  р-н<BR>
3)Железнодорожный  р-н<BR>
4)В черте города<BR></div>
</LI><HR>
<LI><SECTION id="flip2" class="ptr">Когда вы доставляете?</SECTION>
<div id="panel2" class="panel">
Мы осуществляем доставку по средам, четвергам и пятницам для всех клиентов, а также по субботам, понедельникам, вторникам и воскресеньям в определенных районах.<BR>
Заказать можно в любое время суток. Доставка будет сделана между 30-60 минутами после размещения заказа.
</div></LI><HR>
<LI><SECTION id="flip3" class="ptr">Что делать, если меня нет дома, чтобы принять доставку?</SECTION>
<div id="panel3" class="panel">Не волнуйтесь! Если вы не дома во время доставки, наш курьер высадит коробку у вашей входной двери (или там, где вы укажете в Инструкции по доставке). Если вы живете в районе, где ящик не может быть легко оставлен, мы предлагаем одно из следующих решений:<BR>
✔Укажите адрес полезного соседа, который будет дома во время доставки и может принять вашу посылку за вас. ✔Доставьте коробку на свое рабочее место.<BR>
✔Пусть коробку доставят на ваше рабочее место.</div></LI><HR>
<LI><SECTION id="flip4" class="ptr">Как пища остается свежей в пути?</SECTION>
<div id="panel4" class="panel">У нас есть специально разработанные коробки, которые мы упаковываем с хорошим, толстым вкладышем и пакетами со льдом, чтобы гарантировать, что все прибудет к вам совершенно холодным!</DIV></LI><HR>
<LI><SECTION id="flip5" class="ptr">Сколько стоит доставка?</SECTION>
<div id="panel5" class="panel">Это бесплатно, глупышка! Вы подписываетесь, и доставка за наш счет!</DIV></LI><HR>
<LI><SECTION id="flip6" class="ptr">Сколько калорий содержится в вашей еде?</SECTION>
<div id="panel6" class="panel">Грубо говоря, наши блюда содержат от 500 до 800 калорий каждый.</DIV></LI>
</UL></FONT>
</TR></TD>
</TABLE>
<DIV id="voucher" style="color:white;position:absolute;font-size: 25">Ваш ID :6457HT5467 (Нажмите, чтобы скопировать)</DIV><BR>
<IMG SRC="discount.jpg" width="300" height="150" border="2" id="banner" align="right"></IMG>
</BODY>
</HTML>