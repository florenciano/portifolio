$(function(){var t={labels:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],datasets:[{fillColor:"rgba(0,205,205,0.75)",strokeColor:"rgba(0,180,180,0.75)",highlightFill:"rgba(0,205,205,0.9)",highlightStroke:"rgba(0,180,180,0.75)",data:["134","254","552","476","488","402","300","520","633","655","733","297"]}]},e=$("#myChart").get(0).getContext("2d");new Chart(e).Bar(t,{responsive:!0});Chart.defaults.global={scaleLineColor:"rgba(245,245,245,1)",scaleLineWidth:1,scaleFontFamily:"'verdana', sans-serif",tooltipFillColor:"rgba(0,0,0,0.75)",tooltipFontFamily:"'verdana', sans-serif",animationSteps:100};var a=$(".btnMonth");$(a).on("click",function(t){var e=$(this);e.toggleClass("activeMonth"),t.preventDefault(),e.next(".listCases").slideToggle(400),e.hasClass("activeMonth")&&$(this).find("img").css({"-webkit-transform":"rotate(180deg)","-ms-transform":"rotate(180deg)","-0-transform":"rotate(180deg)",transform:"rotate(180deg)"}),e.hasClass("activeMonth")||$(this).find("img").css({"-webkit-transform":"rotate(0deg)","-ms-transform":"rotate(0deg)","-0-transform":"rotate(0deg)",transform:"rotate(0deg)"})}),$(".list-in-listCases").each(function(t,e){var a=$(this).children("li");0!=a.length&&void 0!=a.length&&null!=a.length||$(this).parents("li.c3").hide()}),setTimeout(function(){var t=0,e=$("#listE-topList li");$.each(e,function(e,a){t++,$(this).find(".numbCase-topList").text(t)})}(),200),setTimeout(function(){var t=5,e=$("#listD-topList li");$.each(e,function(e,a){t++,$(this).find(".numbCase-topList").text(t)})}(),400),setTimeout(function(){var t=$(".valueCase-topList"),e=$("#value-sum"),a=0;t.each(function(t,e){a+=parseInt($(this).text())}),NaN==e.text(a)||null==e.text(a)||void 0==e.text(a)?e.text(0):e.text(a)}(),500)});