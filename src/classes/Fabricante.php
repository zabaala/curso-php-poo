<?

namespace App\Classes;

class Fabricante
{
    /**
     * Nome do fabricante.
     * @var string
     */
    private $nome;

    /**
     * Endereço do fabricante.
     * @var String
     */
    private $endereco;

    private $produtos = [];

    /**
     * Documento do fabricante.
     * @var String
     */
    private $documento;

    /**
     * Fabricante constructor.
     * @param string $nome
     * @param string $endereco
     * @param string $documento
     */
    public function __construct($nome = '', $endereco = '', $documento = '')
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

    /**
     * Retorna o nome do Fabricante.
     * @return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Adiciona uma lista de produtos ao Fabricante.
     * @param array $p
     */
    public function setProdutos($p = []) {
        if(count($p)) {
            $this->produtos[] = $p;
        }
    }

    /**
     * Recupera a lista de produtos do fabricante.
     * @return array
     */
    public function getProdutos() {
        return $this->produtos;
    }
}