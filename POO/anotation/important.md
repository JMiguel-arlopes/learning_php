<h2>Constructor:</h2>
<p>É um método especial dentro da classe que é acionado assim que um Objeto é instanciado.<br>
<b>Para acionar o Constructor, coloque:<br>
<code>public function __construct(var1, var2){}</code></b>

<b>Lembre-se:</b> caso o Contructor tenha parâmentros, esses parâmetros devem ser postos dentro da classe quando ela é instanciada por um objeto.
<br>
ex:

</p>

```php
// className.php
    class Exemple {

    public string $name;
    public int $age;

    public function __contruct(string $name, int $age) {
    this->name = $name;
    this->age = $age;
    }
    }
```

```php
    // implement.php
    include(className.php);

    $person = new Exemple('João', 20);
    echo $person->name;
    echo $person->age;
```

<br>

<h2>Namespace:</h2>
<p>O Namespace funciona como um cara que vai inserir um diretório a mais no seu arquivo. Ele basicamente especifica mais a Path do seu arquivo inserindo mais um nome antes de acessar o arquivo que você deseja puxar.</p>
<h5>Pulo do Gato: Imagine que o namespace oferece um diretório fantasma para o arquivos que não pode ser acessado pelo include ou require. Então pra revelar essa pasta e especificar ainda mais o caminho, você utiliza o use e deixa claro o que o Index.php não conseguia enxergar.</h5>

<h5>Qual a finalidade disso?</h5>
<p>Resolvem-se 2 problemas.</p>
<ol>
    <li>Conflitos de Código: muitas vezes 2 classes tinham o mesmo nome ou algo similar, o que gerava conflito quando ambos eram necessários para o código.</li>
    <li>Você pode inserir "apelidos" aos arquivos: Isso diminui o extenso número de caracteres e deicando o código mais Clean, além de especificar ainda mais o arquivo puxado pra odeferece risco 0 em conflitos.</li>    
</ol>
<h5>Como usar?</h5>
<ol>
<li>Utilize o <code>namespace</code> no topo do código junto ao nome que queira dar a especificidade do arquivo</li>
<li>Vá até o arquivo index (ou que queira puxar a classe criada com namespace) e importe ele com <code>include()</code> e utilize o <code>use</code> para inserir a nova Path criada. Caso queira, coloque um apelido no <code>Use</code></li>
</ol>

ex:<br>

```php
// classNamespace.php
namespace model;

class Product {
    public function printHello() {
        echo 'Hello Product Model'
    }
}
```

```php
// index.php

include(classNamespace.php)
use model\Product;

$product = new Product();
$product->printHello();

// ou você pode definir apelidos como no código abaixo:

include(classNamespace.php)
use model\Product as productModel;

$product = new productModel()
$product->printHello();
```

<br>

<h2>Interface:</h2>
  É muito parecido com <code>abstract</code>, a diferença é que <code>interface</code> apresenta apenas métodos dentro de sí que devem ser puxados (herdados) pelas outras classes e, nessas classes, você decide o rumo que esse método terá. Incluir todos os métodos é obrigatório. <br> Basicamente a <code>interface</code> cria o método mas não diz o que ele deve fazer, cabe a classe que herdar a <code>interface</code> decidir isso.
    <br>
    OBS: ao invés de <code>extends</code>, utilize <code>implements</code> para herdar a <code>Interface</code>.
    <br>
    Propósito: evitar que uma classe deixe uma funcionalidade de lado, organizar e demarcar melhor o código.
    <br>
    ex:

```php
  // Interface.php
  interface ExempleInterface {
    public function verifyNumber(int $num): string;
  }
```

```php
  // class.php
  class ClassName implements ExempleInterface {

    public function verifyNumber(int $num): string {
      $result = $num % 2;
      if($result == 0) {
        return 'Par';
      } else {
        return 'Ímpar';
      }
    }
  }
```
