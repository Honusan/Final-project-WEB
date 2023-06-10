<?php
$subscriptions = allSubscriptions();
// Debug subscriptions array
//print_r($subscriptions);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin panel</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark headerr">
        <span class="navbar-brand">Admin</span>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav px-3 ml-auto">
                <li class="nav-item text-nowrap">
                    <a href="logout.php" class="navv">Sign out</a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="container pt-3">
        <h1>My subscribers</h1>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscriptions as $index => $subscription): ?>
                <tr>
                    <td> <?= $index + 1 ?></td>
                    <td><?= $subscription['name'] ?></td>
                    <td> <?= $subscription['email'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </td>
            </td>
        </table>
    </main>
</body>

</html>