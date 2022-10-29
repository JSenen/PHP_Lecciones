<!-- DECLARAMOS LAS CLASES -->
<?php class Account
{
public int $number;
public string $type;
public float $balance;

}

class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;

}
?>
<!-- Creamos los objetos y asignamos datos a atributos -->

<?php
$customer = new Customer();
$account = new Account();
$customer -> email = 'ivy@bank.es';
$account  -> balance = 1000.00;
$customer -> forename = 'Ivyroches';
?>
<!-- Mostramos por pantalla -->

<?php include '../includes/header.php'; ?>
<p>Email: <?= $customer->email ?></p>
<p>Name: <?= $customer->forename ?></p>
<p>Balance: <?= $account->balance ?></p>

