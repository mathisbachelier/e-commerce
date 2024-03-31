<div id="cgv" class="mb-3">
    
  <label for="conditions" class="form-label">Conditions Générales de vente</label>

    <div class="mb-3 row">
        <label for="date" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input id="date" type="date" class="form-control">
        </div>
    </div> 
    <div class="mb-3 row">
        <label for="redactor" class="col-sm-2 col-form-label">Rédacteur</label>
        <div class="col-sm-10">
            <input id="redactor" type="text" class="form-control">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="conditions" class="col-sm-2 col-form-label">Conditions</label>
        <div class="col-sm-10">
            <textarea id="conditions" class="form-control" placeholder="Écrire ici..."></textarea>
        </div>
    </div>
  
    <button id="submitButton" class="btn btn-primary">Sauvegarder</button>

</div>

<div id="myCgv">
    <script type="text/javascript">
        window.onload = function () {
                if(localStorage.getItem("conditions")) {

                    document.getElementById('cgv').style.display = "none";
                    
                    var localStorageJSON = JSON.parse(localStorage.getItem("conditions"));
                    var myCgv = document.getElementById('myCgv');

                    var ul = document.createElement("ul");

                    for (let element of Object.entries(localStorageJSON)) {
                        var li = document.createElement("li");
                        li.textContent = element[0] + " : " + element[1];
                        ul.appendChild(li);
                    }

                    myCgv.appendChild(ul);
                }
            };
      </script>
</div>

<script type="text/javascript">

    var date = document.getElementById('date');
    var redactor = document.getElementById('redactor');
    var conditions = document.getElementById('conditions');
    var submitButton = document.getElementById('submitButton');
    var cgv = document.getElementById('cgv');

    submitButton.addEventListener('click', function() {

        if(date.value == "" || redactor.value == "" || conditions.value == "") {
            alert("Veuillez remplir tous les champs");
            return false;
        }

        const myCGV = {
            date : date.value,
            redactor : redactor.value,
            conditions : conditions.value,
        }

        localStorage.setItem("conditions", JSON.stringify(myCGV));

        location.reload();
    });

</script>