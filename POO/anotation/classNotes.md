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

- Classe com `abstract` não pode ser instanciada, apenas herdada. Foi feita pra isso! <br>
  ex:
  ```php
  abstract class ClassName{
    ...
  }
  ```
