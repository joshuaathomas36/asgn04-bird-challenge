<?php

ob_start();

class Bird {

  public $CommonName;
  public $Habitat;
  public $Food;
  public $NestPlacement;
  public $Behavior;
  public $conservation_id = "conservation_id not sure yet";
  public $BackyardTips;

  // public const CONSERVATIONLEVEL = ['Low', 'Moderate', 'High', 'Extreme'];

  // public const GENDERS = ['Mens', 'Womens', 'Unisex'];

  protected const CONSERVATIONLEVEL = [
    1 => 'Low',
    2 => 'Moderate',
    3 => 'High',
    4 => 'Extreme'
  ];

  // public function __construct($args=[]) {
  //   //$this->brand = isset($args['brand']) ? $args['brand'] : '';
  //   $this->brand = $args['brand'] ?? '';
  //   $this->model = $args['model'] ?? '';
  //   $this->year = $args['year'] ?? '';
  //   $this->category = $args['category'] ?? '';
  //   $this->color = $args['color'] ?? '';
  //   $this->description = $args['description'] ?? '';
  //   $this->gender = $args['gender'] ?? '';
  //   $this->price = $args['price'] ?? 0;
  //   $this->weight_kg = $args['weight_kg'] ?? 0.0;
  //   $this->condition_id = $args['condition_id'] ?? 3;

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function conservation_level($value) {
    calls CONSERVATIONLEVEL;
    display answer;
  }

  // public function set_weight_kg($value) {
  //   $this->weight_kg = floatval($value);
  // }

  // public function weight_lbs() {
  //   $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
  //   return number_format($weight_lbs, 2) . ' lbs';
  // }

  // public function set_weight_lbs($value) {
  //   $this->weight_kg = floatval($value) / 2.2046226218;
  // }

  // public function condition() {
  //   if($this->condition_id > 0) {
  //     return self::CONDITION_OPTIONS[$this->condition_id];
  //   } else {
  //     return "Unknown";
  //   }
  // }

}

spl_autoload_register('my_autoload');

?>
