<?

namespace App\Classes;

use App\Interfaces\OrcamentoInterface;

class Orcamento
{
    private $itens;

    public function adicionar(OrcamentoInterface $item, $quantidade) {
        $this->itens[] = array($quantidade, $item);
    }

    function total() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += ($item[0] * $item[1]->getPreco());
        }
        return $total;
    }
}