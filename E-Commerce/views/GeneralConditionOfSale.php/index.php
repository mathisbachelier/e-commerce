<title>Éditeur des conditions générales de vente</title>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<h1>Éditeur des conditions générales de vente</h1>
<form method="POST" action="/general-conditions-of-sale/save">
    @csrf 
    <textarea id="cgvContent" name="cgvContent"></textarea>
    <button type="submit">Enregistrer</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        tinymce.init({
            selector: '#cgvContent', 
            height: 500, 
            plugins: 'autoresize',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link | code',
            menubar: false, 
            statusbar: false 
        });
    });
</script>
