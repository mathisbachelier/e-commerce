<?php
namespace App\Controllers;

use App\Controllers;

class ConditionGeneralOfSaleController extends Controller{
    public function create()
    {
        return $this->view('conditionGeneralOfSale.create');
    }
    public function save()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data && !empty($data['conditions'])) {
            // Préparation du chemin vers le fichier
            $filePath = __DIR__ . '/conditionsGeneralOfSale/save-cgv.php';
            
            // Préparation du contenu à sauvegarder
            $content = "<?php\n//CGV\n\$conditions = <<<CGV\n" . $data['conditions'] . "\nCGV;\n?>";
    
            // Sauvegarde dans le fichier
            file_put_contents($filePath, $content);
            
            http_response_code(200); // OK
            echo json_encode(['message' => 'Les conditions de vente ont été sauvegardées avec succès.']);
        } else {
            http_response_code(400); // Bad Request
            echo json_encode(['message' => 'Données invalides fournies.']);
        }
    }
    
}
    
