"use strict";function ownKeys(a,o){var e=Object.keys(a);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(a);o&&(i=i.filter(function(o){return Object.getOwnPropertyDescriptor(a,o).enumerable})),e.push.apply(e,i)}return e}function _objectSpread(a){for(var o=1;o<arguments.length;o++){var e=null!=arguments[o]?arguments[o]:{};o%2?ownKeys(Object(e),!0).forEach(function(o){_defineProperty(a,o,e[o])}):Object.getOwnPropertyDescriptors?Object.defineProperties(a,Object.getOwnPropertyDescriptors(e)):ownKeys(Object(e)).forEach(function(o){Object.defineProperty(a,o,Object.getOwnPropertyDescriptor(e,o))})}return a}function _defineProperty(a,o,e){return o in a?Object.defineProperty(a,o,{value:e,enumerable:!0,configurable:!0,writable:!0}):a[o]=e,a}var url=window.location.pathname.split("/");url[url.length-1]&&document.querySelector("#".concat(url[3])).classList.add("active"),$(document).ready(function(){$(".banner-slider").slick({arrows:!1,dots:!0,fade:!0,autoplay:!0,autoplaySpeed:5e3}),$(".estrutura-slider").slick({slidesToShow:5,responsive:[{breakpoint:1024,settings:{slidesToShow:4}},{breakpoint:896,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}},{breakpoint:430,settings:{slidesToShow:1}}],prevArrow:'<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',nextArrow:'<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>'}),$(".acomodacao-slider-principal").slick({slidesToShow:1,infinite:!1,prevArrow:'<span class="arrow prev"><i class="fas fa-chevron-left"></i></span>',nextArrow:'<span class="arrow next"><i class="fas fa-chevron-right"></i></span>'}),$(".acomodacao-slider-secundario").slick({slidesToShow:4,arrows:!1,infinite:!1}),$(".acomodacao-slider-principal").on("beforeChange",function(a,o,e,i){i=i==o.slideCount-2?i-2:i-1,$('.acomodacao-slider-secundario[data-interacao="'.concat($(this).data("interacao"),'"]')).slick("slickGoTo",i)}),$(".acomodacao-slider-secundario").on("beforeChange",function(a,o,e,i){i=i==o.slideCount-2?i-2:i,$('.acomodacao-slider-principal[data-interacao="'.concat($(this).data("interacao"),'"]')).slick("slickGoTo",i)}),$(".acomodacao-slider-secundario a").click(function(a){a.preventDefault(),$('.acomodacao-slider-principal[data-interacao="'.concat($(this).data("interacao"))).slick("slickGoTo",$(this).data("slide")),$('.acomodacao-slider-secundario[data-interacao="'.concat($(this).data("interacao"))).slick("slickGoTo",$(this).data("slide"))}),$(".mobile-menu").click(function(){$(".cabecalho .segunda-linha .itens").toggleClass("aberto")}),$(".pagina-fotos .fotos").lightGallery({download:!1}),$(".pagina-fotos .fotos").slick({slidesToShow:5,autoplay:!0,prevArrow:'<div class="arrows-container" id="prev-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-left"></i></span></div>',nextArrow:'<div class="arrows-container" id="next-arrow"><span class="arrows"><i class="fas fa-xs fa-chevron-right"></i></span></div>',variableWidth:!0,responsive:[{breakpoint:999999,settings:"unslick"},{breakpoint:1050,slidesToShow:5}]});var a=function(a){return 11===a.replace(/\D/g,"").length?"(00) 00000-0000":"(00) 0000-00009"},o={onKeyPress:function(o,e,i,s){i.mask(a.apply({},arguments),s)}};$("#telefone").mask(a,o),$("#formulario-contato .input").focus(function(){this.classList.remove("erro"),$(this).parent().find(".mensagem-erro").css("visibility","hidden")}),$("#formulario-contato").submit(function(a){a.preventDefault();var o=!1,e=$(this).find("#nome"),i=$(e).val();(/\d/.test(i)||/[^a-z\sáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]/i.test(i)||i.length<2)&&(o=!0,$(e).addClass("erro"),$(e).parent().find(".mensagem-erro").css("visibility","visible"));var s=$(this).find("#telefone"),r=$(s).val();14!==r.length&&15!==r.length&&(o=!0,$(s).addClass("erro"),$(s).parent().find(".mensagem-erro").css("visibility","visible"));var t=$(this).find("#email"),c=$(t).val();/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(c).toLowerCase())||(o=!0,$(t).addClass("erro"),$(t).parent().find(".mensagem-erro").css("visibility","visible"));var n=$(this).find("#assunto"),l=$(n).val(),d="",m="",p="",u="";if(null==l)o=!0,$(n).addClass("erro"),$(n).parent().find(".mensagem-erro").css("visibility","visible");else if("reserva"==l){var f=$(this).find("#acomodacao");null==(d=$(f).val())&&(o=!0,$(f).addClass("erro"),$(f).parent().find(".mensagem-erro").css("visibility","visible"));var v=$(this).find("#datas");""==(m=$(v).val())&&(o=!0,$(v).addClass("erro"),$(v).parent().find(".mensagem-erro").css("visibility","visible"))}else"duvidas"!=l&&"informacoes"!=l||(p=$(this).find("#mensagem"),""==(u=$(p).val())&&(o=!0,$(p).addClass("erro"),$(p).parent().find(".mensagem-erro").css("visibility","visible")));var b={nome:i,email:c,telefone:r,mensagem:u,assunto:l,datas:m,acomodacao:d};o||$.ajax({type:"POST",url:"contato/".concat(l,"/obrigado"),data:b,beforeSend:function(){$(".mensagem > div").css("display","none"),$(".mensagem .carregando").css("display","flex")},success:function(){$(".mensagem > div").css("display","none"),$(".mensagem .sucesso").css("display","flex");var a=window.location.pathname.split("/");a.pop(),window.location=a.join("/")+"/contato/".concat(l,"/obrigado"),localStorage.setItem("data",JSON.stringify(_objectSpread({},b)))},error:function(){$(".mensagem > div").css("display","none"),$(".mensagem .erro").css("display","flex")},complete:function(){return console.log("completado")}})}),$("#assunto").change(function(){"reserva"==$(this).val()?$(".select-reserva").css("display","flex"):$(".select-reserva").css("display","none")});var e=new URLSearchParams(window.location.search);if(e.has("acomodacao")&&($("#assunto").val("reserva"),$(".select-reserva").css("display","flex"),$("#acomodacao").val(e.get("acomodacao"))),null!==document.getElementById("datas"))new Litepicker({element:document.getElementById("datas"),minDate:(new Date).toISOString().slice(0,10),format:"DD/MM/YYYY",singleMode:!1,tooltipText:{one:"noite",other:"noites"},tooltipNumber:function(a){return a-1}});if(document.querySelector("#email"))document.querySelector("#email").innerHTML=JSON.parse(localStorage.getItem("data")).email;else if(document.querySelector("#acomodacao")){var i=[{id:1,titulo:"Suíte master",descricao:["Cama de casal Queen","Frigobar","Varanda com vista pro mar","Banheiro individual"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-1.png"},{id:2,titulo:"Suíte simples",descricao:["Acomodação para duas pessoas ou 1 pessoa (quarto individual)","Cama de casal Queen","Frigobar","Banheiro individual"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-2.png"},{id:3,titulo:"Quarto coletivo com 3 beliches",descricao:["Acomodação coletiva para até 6 pessoas","3 beliches","Frigobar","Locker no quarto com 1 armazenamento para cada pessoa"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-3.png"},{id:4,titulo:"Quarto coletivo feminino com 3 beliches",descricao:["Acomodação coletiva de até 6 pessoas","3 beliches","Frigobar","Locker no quarto com 1 armazenamento para cada pessoa","Banheiro coletivo no quarto com 1 sanitário privativo","1 chuveiro com vestiário"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-4.png"},{id:5,titulo:"Quarto de coletivo com acessibilidade",descricao:["Acomodação coletiva de até 6 pessoas","3 beliches","Frigobar","Locker no quarto com 1 armazenamento para cada pessoa","Banheiro coletivo no quarto com 1 sanitário e chuveiro com acessibilidade para deficiente","1 chuveiro coletivo sem acessibilidade","1 sanitário privativo com porta"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-5.png"},{id:6,titulo:"Quarto coletivo com 4 beliches",descricao:["Acomodação coletiva para até 8 pessoas","4 beliches","Frigobar","Locker no quarto com 1 armazenamento para cada pessoa"],fotoPrincipal:"/bruno-brasolin/desafio-2/public/img/acomodacoes/acomodacao-6.png",observacao:"No caso dos quartos coletivos com 3 e 4 beliches ambos terão 1 banheiro coletivo entre os dois para uso de ambos, segue descrição do banheiro:","lista-titulo":"Banheiro coletivo (dois banheiros coletivos, hum para cada 2 quartos):",lista:["2 chuveiros com vestiários embutidos","1 sanitário privativo com porta","1 pia dupla com espelho","1 mictório"]}].find(function(a){return a.id==JSON.parse(localStorage.getItem("data")).acomodacao});document.querySelector("#acomodacao").innerHTML=i.titulo,i.descricao.map(function(a){var o=document.createElement("li");o.innerHTML=a,o.classList.add("descricao-item"),document.querySelector("#descricao").appendChild(o)}),document.querySelector("#acomodacao-imagem").setAttribute("src",i.fotoPrincipal),document.querySelector("#datas").innerHTML=JSON.parse(localStorage.getItem("data")).datas}});