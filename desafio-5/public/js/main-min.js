"use strict";feather.replace(),document.querySelector(".navbar .icon").addEventListener("click",function(){document.querySelectorAll(".navbar .navbar-list, .navbar .right").forEach(function(e){e.classList.contains("active")?(e.classList.remove("active"),e.classList.remove("overflow")):(e.classList.add("active"),setTimeout(function(){e.classList.add("overflow")},300))})}),document.querySelectorAll(".phone .group").forEach(function(e){return e.addEventListener("click",function(){document.querySelectorAll(".phone .group").forEach(function(e){e.classList.remove("active")}),this.classList.add("active")})});var glideConveniadosConfig={type:"carousel",perView:3,gap:15,breakpoints:{877:{perView:2},550:{perView:1}}},glideConveniados=document.querySelector(".glide-conveniados");null!=glideConveniados&&new Glide(".glide-conveniados",glideConveniadosConfig).mount();var glideNoticiasConfig={type:"slider",perView:3,gap:20,infinite:!1},glideNoticias=document.querySelector(".glide-noticias");null!=glideNoticias&&new Glide(".glide-noticias",glideNoticiasConfig).mount();var glideDescontosConfig={type:"slider",perView:1,infinite:!1},glideDescontos=document.querySelector(".glide-descontos");null!=glideDescontos&&new Glide(".glide-descontos",glideDescontosConfig).mount();