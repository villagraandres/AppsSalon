let paso=1;const pasoInicial=1,pasoFinal=3;function iniciarApp(){mostrarSeccion(),tabs(),botonesPaginador(),paginaSiguiente(),paginaAnterior()}function mostrarSeccion(){const o=document.querySelector(".mostrar");o&&o.classList.remove("mostrar");const t="#paso-"+paso;document.querySelector(t).classList.add("mostrar");document.querySelector(".actual").classList.remove("actual");document.querySelector(`[data-paso="${paso}"]`).classList.add("actual")}function tabs(){document.querySelectorAll(".tabs button").forEach(o=>{o.addEventListener("click",(function(o){paso=parseInt(o.target.dataset.paso),mostrarSeccion(),botonesPaginador()}))})}function botonesPaginador(){const o=document.querySelector("#siguiente"),t=document.querySelector("#anterior");1===paso?(t.classList.add("ocultar"),o.classList.remove("ocultar")):3===paso?(t.classList.remove("ocultar"),o.classList.add("ocultar")):(t.classList.remove("ocultar"),o.classList.remove("ocultar")),mostrarSeccion()}function paginaSiguiente(){document.querySelector("#anterior").addEventListener("click",(function(){paso<=1||(paso--,botonesPaginador())}))}function paginaAnterior(){document.querySelector("#siguiente").addEventListener("click",(function(){paso>=3||(paso++,botonesPaginador())}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));