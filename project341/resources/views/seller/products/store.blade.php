<?php

use Illuminate\Support\Facades\DB;

DB::insert('insert into products (name,brand,price,image,stock) values (?,?,?,?,?)', [$_POST['name'], $_POST['brand'], $_POST['price'], $_POST['image'], $_POST['stock']]);
?>
<h1>Product stored</h1>