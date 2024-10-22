<?php

    declare(strict_types=1);

    class SuperHero {
        // Promoted properties -> PHP 8
        public function __construct(
            public string $name,
            public array $powers,
            public string $planet
            ) {
        }

        public function attack() {
            return "$this->name ataca con sus poderes!";
        }

        public function show_all(){
            return get_object_vars($this);
        }

        public function description() {
            $powers = implode(",", $this->powers);

            return "$this->name es un superheroe que viene de
            $this->planet y tiene los siguientes poderes: $powers";
        }

        public static function random(){
            $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
            $powers = [["SuperFuerza", "Volar", "Rayos Laser"],
            ["Superfuerza", "Super Agilidad", "Telaranas"],
            ["Regeneracion", "Superfuerza", "Garras de Adamantium"],
            ["Superfuerza", "Volar", "Rayos Laser"],
            ["Superfuerza", "Super Agilidad", "Cambio de Tamano"],
            ];
            $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

            $name = $names[array_rand($names)];
            $power = $powers[array_rand($powers)];
            $planet = $planets[array_rand($planets)];

            return new self($name, $power, $planet);
        }
    }

    $hero = new SuperHero("Superman", ["Super fuerza", "Rayos X"], "Krypton");
    echo $hero->description();

?>