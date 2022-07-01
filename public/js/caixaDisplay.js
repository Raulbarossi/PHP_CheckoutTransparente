let caixa_info =  document.querySelector('.caixa-display-info')
  function ClickDisplayInfo(event) {
    event.preventDefault;
    if (caixa_info.style.display === "block") {
    caixa_info.style.display = "none";
    } else {
      caixa_info.style.display = "block";
    }
  }