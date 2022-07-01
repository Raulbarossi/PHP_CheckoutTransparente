const mp = new MercadoPago('TEST-d0c1b8da-f886-4632-89b2-dc4793d47355');

const cardForm = mp.cardForm({
   amount: '100.5',
   iframe: true,
   form: {
     id: 'form-checkout',
     cardholderName: {
       id: 'form-checkout__cardholderName',
       placeholder: "Titular do cartão",
     },
     cardholderEmail: {
       id: 'form-checkout__cardholderEmail',
       placeholder: 'E-mail'
     },
     cardNumber: {
       id: 'form-checkout__cardNumber-container',
       placeholder: 'Número do cartão',
     },
     securityCode: {
       id: 'form-checkout__securityCode-container',
       placeholder: 'Código de segurança'
     },
     installments: {
       id: 'form-checkout__installments',
       placeholder: 'Parcelas'
     },
     expirationDate: {
       id: 'form-checkout__expirationDate-container',
       placeholder: 'Data de vencimento (MM/YYYY)',
     },
     identificationType: {
       id: 'form-checkout__identificationType',
       placeholder: 'Tipo de documento'
     },
     identificationNumber: {
       id: 'form-checkout__identificationNumber',
       placeholder: 'Número do documento'
     },
     issuer: {
       id: 'form-checkout__issuer',
       placeholder: 'Banco emissor'
     }
   },
   callbacks: {
     onFormMounted: function (error) {
       if (error) return console.log('Callback para tratar o erro: montando o cardForm ', error)
     },
     onSubmit: function (event) {
       event.preventDefault();
 
       const {
         paymentMethodId: payment_method_id,
         issuerId: issuer_id,
         cardholderEmail: email,
         amount,
         token,
         installments,
         identificationNumber,
         identificationType
       } = cardForm.getCardFormData();
 
        fetch('/process_payment', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            token,
            issuer_id,
            payment_method_id,
            transaction_amount: Number(amount),
            installments: Number(installments),
            description: 'product description',
            payer: {
              email,
              identification: {
                type: identificationType,
                number: identificationNumber
             }
           }
         })
       })
     },
     onFetching: function (resource) {
       console.log('fetching... ', resource)
       const progressBar = document.querySelector('.progress-bar')
       progressBar.removeAttribute('value')
 
       return () => {
         progressBar.setAttribute('value', '0')
       }
     }
   }
 });