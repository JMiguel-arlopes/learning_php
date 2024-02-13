- Para um classe herdar outra, use `extends` <br>
  ex:
  ```php
    class Filho extends Pai {
        ...
    }
  ```
- Classes com `final` não podem ser herdadas. <br>
  ex:

  ```php
  final class ClassName{
    ...
  }
  ```

- Classe com `abstract` não pode ser instanciada, apenas herdada. Foi feita pra isso!
  <br>
  Nela você pode criar métodos e propriedades completas para outras classes absorverem.
  <br>
  exemplo de como criar:

  ```php
  abstract class ClassName{
    ...
  }
  ```
