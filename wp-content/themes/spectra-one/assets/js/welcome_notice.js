document.addEventListener("DOMContentLoaded",(()=>{!function(){const{activating:e,installing:t,done:s,activationUrl:n,ajaxUrl:c,pluginSlug:a,nonce:i,pluginStatus:o}=spectraOne;let d;const r=document.querySelector(".swt-welcome-notice .notice-dismiss"),l=document.querySelector(".swt-welcome-notice"),u=document.querySelector(".swt-welcome-notice #swt-install-spectra");u&&(d=u.querySelector(".text"));const w=()=>{l&&l.remove()},m=async()=>{d.textContent=e,await async function(e){try{if(200===(await fetch(e)).status)return{success:!0}}catch(e){return{success:!1}}}(n),u.classList.remove("updating-message"),u.classList.add("updated-message"),d.textContent=s,setTimeout(w,2e3)};u&&u.addEventListener("click",(async()=>{u.classList.add("updating-message"),u.classList.add("disabled"),"installed"!==o?(d.textContent=t,await async function(e){return new Promise((t=>{wp.updates.ajax("install-plugin",{slug:e,success:()=>{t({success:!0})},error:e=>{t({success:!1,code:e.errorCode})}})}))}(a),await m()):await m()})),r.addEventListener("click",(async()=>{const e={method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded; charset=UTF-8"},body:`action=swt_dismiss_welcome_notice&nonce=${i}`};try{200===(await fetch(c,e)).status&&w()}catch(e){}}))}()}));