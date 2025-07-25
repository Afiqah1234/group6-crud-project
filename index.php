<?php include 'shared/header.php'; ?>
<h1>Welcome to the Heaven Restaurant</h1>
<p>Select a module:</p>
<div class="row mt-4">
    <div class="col-md-4">
        <a href="/customers/listcustomers.php" class="btn btn-outline-primary w-100">Manage Customers</a>
    </div>
    <div class="col-md-4">
        <a href="/menu/listmenu.php" class="btn btn-outline-primary w-100">Manage Menu</a>
    </div>
    <div class="col-md-4">
        <a href="/orders/listorders.php" class="btn btn-outline-primary w-100">Manage Orders</a>
    </div>
    <div class="col-md-4">
        <a href="/staff/liststaff.php" class="btn btn-outline-primary w-100">Manage Staff</a>
    </div>
    <div class="col-md-4">
        <a href="/ordersitem/ordersitem.php" class="btn btn-outline-primary w-100">Manage Orders Item</a>
</div>

<?php include 'shared/footer.php'; ?>