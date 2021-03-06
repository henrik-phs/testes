<html>
  <head>
    <!-- SCRIPT PAGAR.ME -->
    <script src="https://assets.pagar.me/checkout/1.1.0/checkout.js"></script>
  </head>
  <body>
    <button id="pay-button">Abrir modal de pagamento</button>

    <script>
    var button = document.querySelector('button');

    // Abrir o modal ao clicar no botão
    button.addEventListener('click', function() {

      // inicia a instância do checkout
      var checkout = new PagarMeCheckout.Checkout({
        encryption_key: 'ek_test_QODnUNqxdlTny6RsG6eHrmFaBzldRT',
        success: function(data) {
          console.log(data);
        },
        error: function(err) {
        	console.log(err);
        },
        close: function() {
        	console.log('The modal has been closed.');
        }
      });

      // Obs.: é necessário passar os valores boolean como string
      checkout.open({
        amount: 8000,
        buttonText: 'Pagar',
        buttonClass: 'botao-pagamento',
        customerData: 'false',
        createToken: 'true',
        paymentMethods: 'credit_card',
        customer: {
          external_id: '#123456789',
          name: 'Fulano',
          type: 'individual',
          country: 'br',
          email: 'fulano@email.com',
          documents: [
            {
              type: 'cpf',
              number: '71404665560',
            },
          ],
          phone_numbers: ['+5511999998888', '+5511888889999'],
          birthday: '1985-01-01'
        }
      });
    });
    </script>
  </body>
</html>
