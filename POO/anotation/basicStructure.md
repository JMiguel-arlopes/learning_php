- propriedades `public` pode ser acessado e/ou inicializado por qualquer coisa.
  <br><br>
- propriedades `private` pode ser acesado somente pela própria classe.
  <br><br>
- propriedade `static` pertencem unicamente a nível de Classe e vao estar presente em todas instâncias que houver, já que vem junto e permanece junto à classe. <br>(diferente de propriedades dinâmicas que mudam ou podem mudar com diferentes as diferentes instancias, como propriedades `Name` e `Age` numa classe `Person`)
  <br>
  Para recorrer a essas propriedades (diferente das propriedades dinâmicas que são acessadas por meio do `->`), utilize o `::` entre a Classe (ou instância) e a propriedade estática que deseja trazer, como: `ClassName::PROPRIEDADE_ESTATICA`.
  <br>
  [Caso queira acessar essas propriedades dentro da Classe, utilize `self::PROPRIEDADE_ESTATICA`]
  <br><br>
- Para recorrer a um método ou propriedade da classe, use `->` entre o Objeto instanciado e a propriedade desejada. <br>
  (Caso queira recorrer a uma propriedade dentro da propria classe, utilize o `This` ao invés uma instância)<br>
  <b>Aviso</b>
  ex:

  ```php
    class ClassName {

        public int $number;

        public function setNumber(int $num) {
            $this->number = $num;
        }
    }

    $exemple1 = ClassName();
    $exemple1->setNumber(7);
    echo $exemple1->number; // result: 7

  ```
