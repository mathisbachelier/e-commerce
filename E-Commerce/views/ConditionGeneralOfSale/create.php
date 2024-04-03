<div id="cgv" class="mb-3">
    <label for="conditions" class="form-label">Conditions Générales de vente</label>
    <div class="mb-3 row">
        <label for="conditions" class="col-sm-2 col-form-label">Conditions</label>
        <div class="col-sm-10">
            <textarea id="conditions" class="form-control" placeholder="Écrire ici..."></textarea>
        </div>
    </div>
    <button id="submitButton" class="btn btn-primary">Sauvegarder</button>
</div>

<div id="div_conditions"></div>

<script>
        const submitButton = document.getElementById('submitButton');

        submitButton.addEventListener('click', function() {
            const conditionsText = document.getElementById('conditions').value;

            if (conditionsText.trim() === '') {
                alert('Veuillez remplir le champ "Conditions" pour poursuivre.');
                return;
            }

            fetch('/E-commerce-BTS-SIO/E-Commerce/conditionGeneralOfSale/save', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ conditions: conditionsText }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch((error) => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la sauvegarde.');
            });
        });
</script>

