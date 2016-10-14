<?php

//require_once ('imports.php');
require_once __DIR__ . "/../../vendor/autoload.php";

use Didando8a\Patterns\Entity\CarView;

session_start();
/** @var CarView $view */
$view = unserialize($_SESSION['view']);
?>

<html>
    <body>
        <h1>Car management</h1>
        <h2>Add to stock</h2>

        <form name="add_to_stock" action="../indexMvc.php" method="post">
            <p>
                Type:
                <select name="selected_car_type">
                    <?php foreach ($view->getModel()->getCarTypesAvailable() as $carType) {?>
                        <option value="<?php echo $carType ?>"><?php echo $carType ?></option>
                    <?php } ?>
                </select>

                Engine:
                <select name="selected_engine_size">
                    <?php foreach ($view->getModel()->getEngineSizesAvailable() as $engineSize) { ?>
                        <option value="<?php echo $engineSize ?>"><?php echo $engineSize ?></option>
                    <?php } ?>
                </select>


                Colour:
                <select name="selected_colour">
                    <?php foreach ($view->getModel()->getColoursAvailable() as $color) { ?>
                        <option value="<?php echo $color ?>"><?php echo $color ?></option>
                    <?php } ?>
                </select>
                <button type="submit" name="submit"value="submit">Submit</button>
            </p>
        </form>

        <h2>Cars in stock</h2>
        <ul>
            <?php foreach ($view->getModel()->getCarsInStock() as $car) { ?>
                <li><?php echo $car ?></li>
            <?php } ?>
        </ul>

    </body>
</html>
