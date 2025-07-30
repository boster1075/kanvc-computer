<?php
session_start();
include('db.php');
include('header.php');

// ดึงประเภท
$types = $db->query("SELECT DISTINCT category FROM products");

// ดึงสินค้าตามประเภทถ้ามี
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = $_GET['type']; 
    $stmt = $db->prepare("SELECT * FROM products WHERE category = ?");
    $stmt->execute([$type]);
} else {
    $stmt = $db->query("SELECT * FROM products");
}
$products = $stmt->fetchAll();
?>

<style>
.user-menu {
  position: relative;
  display: inline-block;
}
.user-menu-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f0f9ff; /* สีฟ้าขาว */
  min-width: 160px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.15);
  z-index: 10;
  border-radius: 6px;
}
.user-menu:hover .user-menu-content {
  display: block;
}
.user-menu-content a {
  color: #0369a1;
  padding: 10px 16px;
  text-decoration: none;
  display: block;
}
.user-menu-content a:hover {
  background-color: #bae6fd;
}
</style>

<div class="mb-6 flex justify-end space-x-4 px-4 py-2 bg-blue-100 rounded">
<?php if (isset($_SESSION['username'])): ?>
    <div class="user-menu cursor-pointer select-none text-blue-900 font-semibold">
        สวัสดี, <?=htmlspecialchars($_SESSION['username'])?> ▼
        <div class="user-menu-content">
            <a href="logout.php">ออกจากระบบ</a>
        </div>
    </div>
<?php else: ?>
    <a href="login.php" class="text-blue-700 font-semibold hover:underline">เข้าสู่ระบบ</a>
    <a href="register.php" class="text-blue-700 font-semibold hover:underline">ลงทะเบียน</a>
<?php endif; ?>
</div>

<h2 class="text-xl font-bold mb-2 px-4">ประเภทสินค้า</h2>
<ul class="list-disc list-inside mb-6 px-8">
    <li><a href="?" class="text-blue-700 hover:underline">ทั้งหมด</a></li>
    <?php foreach ($types as $t): ?>
        <li><a href="?type=<?=urlencode($t['category'])?>" class="text-blue-700 hover:underline"><?=htmlspecialchars($t['category'])?></a></li>
    <?php endforeach; ?>
</ul>

<h2 class="text-xl font-bold mb-2 px-4">สินค้า</h2>
<ul class="list-decimal list-inside px-8">
    <?php foreach ($products as $p): ?>
        <li class="mb-1">
            <a href="product.php?id=<?=htmlspecialchars($p['id'])?>" class="text-blue-900 hover:underline">
                <?=htmlspecialchars($p['name'])?> - <?=number_format($p['price'], 2)?> บาท
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include('footer.php'); ?>
