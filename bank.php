<?php

// Author: Sanchez, Dannah Mikayla M.
// Section: WD203
// Date of Last Update: January 16, 2026

include "classes/Account.php";
include "classes/Customer.php";

$accounts = [
    new Account("20991903", "Savings Account", 18000.50),
    new Account("20991902", "Checking Account", -3500.00),
    new Account("20991901", "Payroll Account", 12000.00),
    new Account("20991900", "Time Deposit Account", 60000.00)
];

$customer = new Customer("Dannah Mikayla", "Sanchez", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Overview</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section>
    <h2>Customer Information</h2>
    <p class="important"><?php echo $customer->getFullName(); ?></p>

    <h2>Account Details</h2>

    <table>
        <thead>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customer->getAccounts() as $account): ?>
            <tr>
                <td class="account-number"><?php echo $account->getAccountNumber(); ?></td>
                <td class="account-type"><?php echo $account->getAccountType(); ?></td>

                <?php if ($account->getBalance() >= 0): ?>
                    <td class="credit">₱<?php echo number_format($account->getBalance(), 2); ?></td>
                <?php else: ?>
                    <td class="overdrawn">₱<?php echo number_format($account->getBalance(), 2); ?></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
