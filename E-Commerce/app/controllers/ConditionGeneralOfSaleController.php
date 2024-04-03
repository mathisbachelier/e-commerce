<?php
namespace App\Controllers;

use App\Controllers;

class ConditionGeneralOfSaleController extends Controller{
    public function create()

    {
        return $this->view('conditionGeneralOfSale.create');
    }

    public function save() {
        $data = json_decode(file_get_contents('php://input'), true);

        if ($data && !empty($data['conditions'])) {
            // Définir le chemin vers le dossier où les CGV seront sauvegardées
            $dirPath = __DIR__ . '/../../public/cgv';
            // Assurer que le dossier existe
            if (!is_dir($dirPath)) {
                mkdir($dirPath, 0755, true);
            }

            // Définir le chemin complet vers le fichier
            $filePath = $dirPath . '/save-cgv.php';
            
            // Préparer le contenu à sauvegarder
            $content = "<?php\n// CGV\n\$conditions = <<<CGV\n" . htmlspecialchars($data['conditions'], ENT_QUOTES, 'UTF-8') . "\nCGV;\n?>";

            // Sauvegarder (ou écraser) dans le fichier
            file_put_contents($filePath, $content);
            
            // Répondre avec succès
            http_response_code(200);
            echo json_encode(['message' => 'Les conditions de vente ont été sauvegardées avec succès.']);
        } else {
            // Répondre avec une erreur si les données sont invalides
            http_response_code(400);
            echo json_encode(['message' => 'Données invalides fournies.']);
        }
    }
}