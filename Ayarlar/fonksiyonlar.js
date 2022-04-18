$(document).ready(function(){//$(document).ready dokuman hazırsa demek

    $.SoruIcerigiGoster =   function(ElemanId){//$.SoruIcerigiGoster Sık sorulan sorulardaki başlık div onclick fonksiyonuyla aynı olmalı
        
        var IslenecekKisim  =   "#"+ElemanId;
    alert(IslenecekKisim);
    
    $(".SorununCevapAlani").slideUp();
    $(IslenecekKisim).parent().find(".SorununCevapAlani").slideToggle();
    }

});
function SoruIcerigiGoster(ElemanId){
    //alert("tıklandı");
    
    var SoruId  =   ElemanId;
    IslenecekKisim  =   "SorununCevapAlani"+ElemanId;
    var x = document.getElementById(IslenecekKisim);
    if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    
    
    
}