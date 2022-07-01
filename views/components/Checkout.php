<div class="d-flex align-items-center conjunto flex-sm-row">
  <div class="caixa p-3">
    <div class="text">
      <form id="form-checkout">
        <div id="form-checkout__cardNumber-container" class="container formStyle"></div>
        <div id="form-checkout__expirationDate-container" class="container formStyle"></div>
        <input type="text" name="cardholderName" id="form-checkout__cardholderName" class="formStyle"/>
        <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" class="formStyle"/>
        <div id="form-checkout__securityCode-container" class="container formStyle" class="formStyle"></div>
        <select name="issuer" id="form-checkout__issuer" class="formStyle"></select>
        <select name="identificationType" id="form-checkout__identificationType" class="formStyle"></select>
        <input type="text" name="identificationNumber" id="form-checkout__identificationNumber" class="formStyle"/>
        <select name="installments" id="form-checkout__installments" class="formStyle"></select>
        <div>
          <button type="submit" id="form-checkout__submit" class="formStyle btnForm">Pagar</button>
          <a onclick=" ClickDisplayInfo(event)" class="btnCard btnCardDisplay ps-2"><i class="fa-solid fa-address-card"></i></a>
        </div>
        <progress value="0" class="progress-bar" style="display:none">Carregando...</progress>
    </form>
    </div>
  </div>
  <div class="caixa caixa-display-info p-1">
    <div class="text-display">
      <h4>Cartões</h4>
      <p>Mastercard - 5031 4332 1540 6351	- 123 - 11/25</p>
      <p>Visa -	4235 6477 2802 5682	- 123 -	11/25</p>
      <p>Amex -	3753 651535 56885	- 1234 - 11/25</p>
      <hr>
      <p>Para testar diferentes resultados utilize os status como titular</p>
      <p>APRO - (CPF) 12345678909 - Pagamento aprovado</p>
      <p>OTHE - (CPF) 12345678909 - Recusado por erro geral</p>
      <p>CONT - Pagamento pendente</p>
      <p>CALL - Recusado com validação para autorizar</p>
      <p>FUND - Recusado por quantia insuficiente</p>
      <p>SECU - Recusado por código de segurança inválido</p>
      <p>EXPI - Recusado por problema com vencimento</p>
      <p>FORM - Recusado por erro no formulário</p>
    </div>
  </div>
</div>