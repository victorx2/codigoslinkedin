<? 

use MobaGuides\MobileLegendsApi\MobileLegends;
use MobaGuides\MobileLegendsApi\Fetchers\Hero;

$hero = MobileLegends::make(Hero::class);
var_dump($hero->all());

?>