<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégration Cinetpay</title>
    <script src="https://docs.cinetpay.com/api/1.0-fr/sdk/js"></script>
</head>
<body>
    <h1>Intégration Cinetpay</h1>

    <form action="/your-cinetpay-endpoint" method="POST" id="paymentForm">
        @csrf
        <!-- Vos champs de formulaire -->
        
        <button type="submit">Payer avec Cinetpay</button>
    </form>

    <script>
        // Exemple d'utilisation du SDK JavaScript de Cinetpay
        CinetPay.setConfig({
            apikey: 'votre_apikey',
            site_id: 'votre_site_id',
            mode: 'PRODUCTION' // ou 'TEST'
        });

        // Ajoutez votre logique de paiement ici
    </script>
</body>
</html>