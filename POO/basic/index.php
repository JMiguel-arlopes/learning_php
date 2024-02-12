<?php 
    class Person
    {
        public string $name;
        public int $age;
        /*  statics são propriedades imutáveis a nível de classe, não de instância,
         então as instâncias não tem valores estáticos diferentes como acontece com propriedades dinâmicas
          que permitem cada instância ter suas propriedades indivisuais como $name e $age. */
        // obs: use :: para acessá-las ao invés de ->
        public static int $heigth = 10;

        public static function doubleAge(): int {
            return self::$heigth*2;
        }

        public function setName(string $name): void {
            $this->name = $name;
        }

        public function setAge(int $age): void {
            $this->age = $age;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getAge(): int {
            return $this->age;
        }
    }
?>