$(document).ready(function () {
   $('#telefone').mask('+55(00)90000-0000', {clearIfNotMatch: true});			
   $('.btnConfirm').off('click').on('click', btnConfirmClick);			
   $('.btnConfirm1').off('click').on('click', btnConfirm1Click);
   $('#botao').off('click').on('click', BotaoClick);
});  

function btnConfirmClick(){
	
	$('#imgBanner').remove();
   $('#card2').css('display', 'none');
	$('#card1').css('display', 'block');
	$('.progress-bar').css('width', '66%').addClass('bg-primary');
}

function btnConfirm1Click(){
	
	$('#imgBanner').remove();
   $('.progress-bar').css('width', '100%').addClass('bg-success');
   $('#card3').css('display', 'block');
   $('#card1').remove();
   $('#h1').remove();
}

function BotaoClick(e) {
   e.preventDefault();  
   gtag_report_conversion();   
   $('#error').empty();
   $('#aguarde').addClass("d-none");
   $('#aguarde2').removeClass("d-none");

   
       var $e = 
       { 
         id: 1,
         nome: $.trim($("#nome").val()),
         email: $.trim($("#email").val()),
         telefone: $.trim($("#telefone").val()),
         campanha: "s1AprendaMais_"+$.trim($("#tipo").val())+"",
         url:"https://blog.digiteinfo.com/form/submit?formId=1"
       };

      $.ajax({
         type: "POST",
         url: "https://n8n-1.digite.com.br/webhook/8dfa394c-abd9-4004-912f-54a7d6e815ee",
         contentType: 'application/json',
         dataType: "json",
         data: JSON.stringify($e),
         beforeSend: function(){
			 $('#botao').addClass('d-none');
            //$('#aguarde').html('<img id="imgSubmit" style="font-size:20px;text-align:center" src="/images/load.gif" width="40" /><br><b>Uma recomendaÃ§Ã£o</b> foi enviada <b>por e-mail</b>.<br>Consulte sua <b>caixa de entrada</b>. SenÃ£o <b>SPAM ou PromoÃ§Ãµes</b>');
         },
         success: function(){
            //$('#aguarde').html('<img id="imgSubmit" style="font-size:20px;text-align:center" src="/images/load.gif" width="40" /><br>Estamos abrindo a recomendaÃ§Ã£o em seguida descubra os cursos gratuitos.<br>');
            $('#frmCadastro').submit();
         },
         error: function(jqXHR, textStatus, errorThrown){
			 $('#botao').removeClass('d-none');
            $('#aguarde2').addClass("d-none");
            $('#error').html(decodeURIComponent(escape("<b>E-mail invÃ¡lido/inexistente ou sua caixa de e-mail pode estar cheia, verifique.</b>")));
            $('#email').select().focus();
         }
      });
}   