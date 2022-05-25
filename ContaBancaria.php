<?php
declare(strict_types=1);

class ContaBanco{
    /**
    * @var string
    */
    private $banco;

    /**
      * @var string
      */

    private $nometitular;

    /**
    * @var string
    */
    private $numeroAgencia;

    /**
    * @var string
    */
    private $numeroConta;

    /**
    * @var string
    */
    private $saldo;

    public function __construct(
        String $banco,
        String $nometitular,
        string $numeroAgencia, 
        string $numeroConta,
        float $saldo)

    {
      $this->banco = $banco;
      $this->nometitular = $nometitular;
      $this->numeroAgencia = $numeroAgencia;
      $this->numeroConta = $numeroConta;
      $this->saldo = $saldo;  
    }

    public function obtersaldo(): string
    {
        return 'seu saldo é : '. $this->saldo;
    }

    public function depositar(float $valor) : string
     {
        $this->saldo +=$valor;
        return 'deposito de '. $valor .' realizado';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -=$valor;
        return 'saque de '. $valor .' realizado';
    }

}


$conta1 = new ContaBanco(
    'banco do brasil',
    'Eduardo Guilherme',
    '7487',
    '5484745',
     100.00

);
var_dump($conta1);

$conta2 = new ContaBanco(
    'Santander',
    'Edu',
    '8287',
    '6958235',
     500.00

);
/*var_dump($conta2);
echo $conta ->obtersaldo();
echo PHP_EOL;
echo $conta->depositar(300);
echo PHP_EOL;
echo $conta->obtersaldo();
echo PHP_EOL;


echo $conta->sacar(150);
echo PHP_EOL;
echo $conta ->obtersaldo();

*/

