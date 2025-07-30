<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kanvc - ร้านอุปกรณ์คอมพิวเตอร์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
        .page {
            display: none;
        }
        .active-page {
            display: block;
        }
        .nav-item.active {
            color: #3B82F6;
            font-weight: 600;
            border-bottom: 2px solid #3B82F6;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h1 class="text-2xl font-bold">การพัฒนาเว็ปไซต์ระบบขายอุปกรณ์คอมพิวเตอร์ออนไลน์            </h1>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="ค้นหาสินค้า..." class="px-4 py-2 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-300 w-64">
                    <button class="absolute right-3 top-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="relative" onclick="showPage('cart')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs" id="cart-count">0</span>
                </button>
               <a href="login.php"> <button class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition" onclick="showPage('account')">                    เข้าสู่ระบบ                </button></a>
				<a href="register.php"><button class="bg-white text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-50 transition" onclick="showPage('account')"> ลงทะเบียน </button></a></a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex space-x-8 overflow-x-auto py-3">
                <div id="nav">
    				<a href="header.php"><button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('home', this)">หน้าหลัก</button></a>
					<a href="product.php"><button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('products', this)">สินค้าทั้งหมด</button></a>
					
					<button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('tracking', this)">ติดตามสินค้า</button>
					
					<a href="checkout.php"><button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('checkout', this)">ชำระเงิน</button></a>
					
					<button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('account', this)">บัญชีของฉัน</button>
					<button class="nav-item px-1 py-2 whitespace-nowrap" onclick="showPage('stock', this)">สินค้าในสต๊อก</button>
				</div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6">
        <!-- Home Page -->
        <div id="home" class="page active-page">
            <!-- Hero Banner -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl p-8 mb-8 text-white">
                <div class="md:flex items-center">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h2 class="text-3xl font-bold mb-4">อัพเกรดคอมพิวเตอร์ของคุณ</h2>
                        <p class="text-lg mb-6">พบกับอุปกรณ์คอมพิวเตอร์คุณภาพสูง ราคาเป็นมิตร พร้อมบริการหลังการขายที่ดีเยี่ยม</p>
                        <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition" onclick="showPage('products')">
                            ช้อปเลย
                        </button>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-64 w-64" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>

            
            <h3 class="text-2xl font-semibold mb-4">หมวดหมู่สินค้า</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white rounded-lg shadow p-4 text-center hover:shadow-lg transition cursor-pointer" onclick="filterCategory('cpu')">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 7H7v6h6V7z" />
                            <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-medium">CPU</h4>
                </div>
                <div class="bg-white rounded-lg shadow p-4 text-center hover:shadow-lg transition cursor-pointer" onclick="filterCategory('gpu')">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-medium">การ์ดจอ</h4>
                </div>
                <div class="bg-white rounded-lg shadow p-4 text-center hover:shadow-lg transition cursor-pointer" onclick="filterCategory('ram')">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                    </div>
                    <h4 class="font-medium">RAM</h4>
                </div>
                <div class="bg-white rounded-lg shadow p-4 text-center hover:shadow-lg transition cursor-pointer" onclick="filterCategory('storage')">
                    <div class="bg-yellow-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-medium">อุปกรณ์จัดเก็บข้อมูล</h4>
                </div>
            </div>
            <h3 class="text-2xl font-semibold mb-4">สินค้าแนะนำ</h3>
   		<div class="flex space-x-4 overflow-x-auto p-4">
		  <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300 min-w-[250px] flex-shrink-0">
			<img src="https://www.jib.co.th/img_master/product/original/20210825105531_43472_21_2.jpg" alt="AMD Ryzen 7 5800X" class="w-full h-48 object-contain bg-white" />
			<div class="p-4">
			  <div class="flex justify-between items-start mb-2">
				<h4 class="font-medium text-lg">AMD Ryzen 7 5800X</h4>
				<span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
			  </div>
			  <p class="text-gray-600 text-sm mb-3">CPU 8 คอร์ 16 เธรด ความเร็ว 3.8GHz</p>
			  <div class="flex justify-between items-center">
				<span class="text-lg font-bold text-blue-600">฿12,900</span>
				<button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('AMD Ryzen 7 5800X', 12900)">
				  ซื้อเลย
				</button>
			  </div>
			</div>
		  </div>

		  <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300 min-w-[250px] flex-shrink-0">
			<img src="https://www.jib.co.th/img_master/product/original/2021071316091247621_1.jpg" alt="NVIDIA RTX 3070" class="w-full h-48 object-contain bg-white" />
			<div class="p-4">
			  <div class="flex justify-between items-start mb-2">
				<h4 class="font-medium text-lg">NVIDIA RTX 3070</h4>
				<span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
			  </div>
			  <p class="text-gray-600 text-sm mb-3">การ์ดจอ 8GB GDDR6 สำหรับเล่นเกมระดับสูง</p>
			  <div class="flex justify-between items-center">
				<span class="text-lg font-bold text-blue-600">฿25,900</span>
				<button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('NVIDIA RTX 3070', 25900)">
				  ซื้อเลย
				</button>
			  </div>
			</div>
		  </div>
		  <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300 min-w-[250px] flex-shrink-0">
			<img src="https://www.jib.co.th/img_master/product/original/2022060413310953593_1.jpg" alt="Kingston HyperX 32GB" class="w-full h-48 object-contain bg-white" />
			<div class="p-4">
			  <div class="flex justify-between items-start mb-2">
				<h4 class="font-medium text-lg">Kingston HyperX 32GB</h4>
				<span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
			  </div>
			  <p class="text-gray-600 text-sm mb-3">RAM DDR4 3200MHz (16GB x 2)</p>
			  <div class="flex justify-between items-center">
				<span class="text-lg font-bold text-blue-600">฿5,490</span>
				<button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('Kingston HyperX 32GB', 5490)">
				  ซื้อเลย
				</button>
			  </div>
			</div>
		  </div>
		  <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300 min-w-[250px] flex-shrink-0">
			<img src="https://www.jib.co.th/img_master/product/original/2019052214582033879_1.png" alt="Samsung 970 EVO Plus 1TB" class="w-full h-48 object-contain bg-white" />
			<div class="p-4">
			  <div class="flex justify-between items-start mb-2">
				<h4 class="font-medium text-lg">Samsung 970 EVO Plus 1TB</h4>
				<span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">สินค้าหมด</span>
			  </div>
			  <p class="text-gray-600 text-sm mb-3">SSD NVMe M.2 ความเร็วสูง</p>
			  <div class="flex justify-between items-center">
				<span class="text-lg font-bold text-blue-600">฿5,990</span>
				<button class="bg-gray-300 text-gray-600 px-3 py-1 rounded cursor-not-allowed">
				  หมดชั่วคราว
				</button>
			  </div>
			</div>
		  </div>
		</div>

        <div id="products" class="page">
            <h2 class="text-2xl font-bold mb-6">สินค้าทั้งหมด</h2>
            
            <!-- Filter -->
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <div class="flex flex-wrap gap-4">
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-700 mb-1">หมวดหมู่</label>
                        <select class="w-full md:w-48 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">ทั้งหมด</option>
                            <option value="cpu">CPU</option>
                            <option value="gpu">การ์ดจอ</option>
                            <option value="ram">RAM</option>
                            <option value="storage">อุปกรณ์จัดเก็บข้อมูล</option>
                        </select>
                    </div>
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-700 mb-1">ราคา</label>
                        <select class="w-full md:w-48 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">ทั้งหมด</option>
                            <option value="0-5000">น้อยกว่า 5,000 บาท</option>
                            <option value="5000-10000">5,000 - 10,000 บาท</option>
                            <option value="10000-20000">10,000 - 20,000 บาท</option>
                            <option value="20000+">มากกว่า 20,000 บาท</option>
                        </select>
                    </div>
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-700 mb-1">สถานะสินค้า</label>
                        <select class="w-full md:w-48 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">ทั้งหมด</option>
                            <option value="instock">มีสินค้า</option>
                            <option value="outofstock">สินค้าหมด</option>
                        </select>
                    </div>
                    <div class="w-full md:w-auto flex items-end">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                            กรองสินค้า
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 7H7v6h6V7z" />
                            <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">AMD Ryzen 7 5800X</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">CPU 8 คอร์ 16 เธรด ความเร็ว 3.8GHz</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿12,900</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('AMD Ryzen 7 5800X', 12900)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 7H7v6h6V7z" />
                            <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">Intel Core i9-12900K</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">CPU 16 คอร์ 24 เธรด ความเร็ว 3.2GHz</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿19,900</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('Intel Core i9-12900K', 19900)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">NVIDIA RTX 3070</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">การ์ดจอ 8GB GDDR6 สำหรับเล่นเกมระดับสูง</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿25,900</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('NVIDIA RTX 3070', 25900)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">AMD Radeon RX 6800 XT</h4>
                            <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">สินค้าหมด</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">การ์ดจอ 16GB GDDR6 ประสิทธิภาพสูง</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿27,900</span>
                            <button class="bg-gray-300 text-gray-600 px-3 py-1 rounded cursor-not-allowed">
                                หมดชั่วคราว
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">Kingston HyperX 32GB</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">RAM DDR4 3200MHz (16GB x 2)</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿5,490</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('Kingston HyperX 32GB', 5490)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">Corsair Vengeance 16GB</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">RAM DDR4 3600MHz (8GB x 2)</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿3,290</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('Corsair Vengeance 16GB', 3290)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">Samsung 970 EVO Plus 1TB</h4>
                            <span class="bg-red-100 text-red-800 text-xs px-2 py-1 rounded">สินค้าหมด</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">SSD NVMe M.2 ความเร็วสูง</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿5,990</span>
                            <button class="bg-gray-300 text-gray-600 px-3 py-1 rounded cursor-not-allowed">
                                หมดชั่วคราว
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden product-card transition duration-300">
                    <div class="bg-gray-200 h-48 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium text-lg">WD Black SN850 2TB</h4>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">มีสินค้า</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3">SSD NVMe M.2 Gen4 ความเร็วสูงสุด</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">฿9,990</span>
                            <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition" onclick="addToCart('WD Black SN850 2TB', 9990)">
                                ซื้อเลย
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tracking Page -->
        <div id="tracking" class="page">
            <h2 class="text-2xl font-bold mb-6">ติดตามสินค้า</h2>
            
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <h3 class="text-lg font-medium mb-4">ตรวจสอบสถานะการจัดส่ง</h3>
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" placeholder="กรอกหมายเลขคำสั่งซื้อหรือหมายเลขพัสดุ" class="flex-grow border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition" onclick="trackOrder()">
                        ตรวจสอบ
                    </button>
                </div>
            </div>
            
            <div id="tracking-result" class="hidden bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-medium">หมายเลขคำสั่งซื้อ: <span class="text-blue-600">#TH12345678</span></h3>
                        <p class="text-gray-600">วันที่สั่งซื้อ: 15 มิถุนายน 2023</p>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">กำลังจัดส่ง</span>
                </div>
                
                <div class="relative">
                    <!-- Timeline -->
                    <div class="absolute left-0 top-0 ml-4 h-full border-l-2 border-blue-500"></div>
                    
                    <!-- Timeline Items -->
                    <div class="mb-8 ml-10 relative">
                        <div class="absolute -left-10 mt-1.5 w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-medium">พัสดุถูกรับโดยผู้ขนส่ง</h4>
                            <p class="text-sm text-gray-600">17 มิถุนายน 2023, 10:30</p>
                            <p class="mt-2">พัสดุถูกรับโดยผู้ขนส่ง Kerry Express และกำลังนำส่งไปยังศูนย์กระจายสินค้า</p>
                        </div>
                    </div>
                    
                    <div class="mb-8 ml-10 relative">
                        <div class="absolute -left-10 mt-1.5 w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-medium">พัสดุถึงศูนย์กระจายสินค้า</h4>
                            <p class="text-sm text-gray-600">17 มิถุนายน 2023, 18:45</p>
                            <p class="mt-2">พัสดุถึงศูนย์กระจายสินค้าหลัก กรุงเทพมหานคร</p>
                        </div>
                    </div>
                    
                    <div class="mb-8 ml-10 relative">
                        <div class="absolute -left-10 mt-1.5 w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-medium">พัสดุกำลังนำส่ง</h4>
                            <p class="text-sm text-gray-600">18 มิถุนายน 2023, 09:15</p>
                            <p class="mt-2">พัสดุกำลังนำส่งโดยพนักงานส่งพัสดุ (คุณสมชาย)</p>
                        </div>
                    </div>
                    
                    <div class="ml-10 relative">
                        <div class="absolute -left-10 mt-1.5 w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <h4 class="font-medium">พัสดุถูกส่งถึงผู้รับ</h4>
                            <p class="text-sm text-gray-600">รอดำเนินการ</p>
                            <p class="mt-2">คาดว่าจะส่งถึงวันที่ 18 มิถุนายน 2023</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 border-t pt-6">
                    <h4 class="font-medium mb-4">รายการสินค้า</h4>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-gray-200 w-16 h-16 rounded flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13 7H7v6h6V7z" />
                                    <path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-medium">AMD Ryzen 7 5800X</h5>
                                <p class="text-gray-600 text-sm">จำนวน: 1 ชิ้น</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-gray-200 w-16 h-16 rounded flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-medium">Kingston HyperX 32GB</h5>
                                <p class="text-gray-600 text-sm">จำนวน: 1 ชิ้น</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout Page -->
        <div id="checkout" class="page">
            <h2 class="text-2xl font-bold mb-6">ชำระเงิน</h2>
            
            <div class="lg:flex gap-8">
                <!-- Cart Items -->
                <div class="lg:w-2/3 mb-6 lg:mb-0">
                    <div class="bg-white rounded-lg shadow p-6 mb-6">
                        <h3 class="text-lg font-medium mb-4">รายการสินค้าในตะกร้า</h3>
                        
                        <div id="cart-items">
                            <!-- Cart items will be dynamically added here -->
                            <div class="text-center py-8 text-gray-500">ไม่มีสินค้าในตะกร้า</div>
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow p-6 sticky top-6">
                        <h3 class="text-lg font-medium mb-4">สรุปคำสั่งซื้อ</h3>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">ราคาสินค้า</span>
                                <span id="subtotal">฿0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">ค่าจัดส่ง</span>
                                <span id="shipping">฿0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">ภาษีมูลค่าเพิ่ม (7%)</span>
                                <span id="tax">฿0.00</span>
                            </div>
                            <div class="border-t pt-3 mt-3">
                                <div class="flex justify-between font-bold">
                                    <span>ยอดรวมทั้งสิ้น</span>
                                    <span id="total" class="text-blue-600">฿0.00</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">รหัสส่วนลด</label>
                            <div class="flex">
                                <input type="text" placeholder="กรอกรหัสส่วนลด" class="flex-grow border border-gray-300 rounded-l px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-r hover:bg-gray-300 transition">
                                    ใช้งาน
                                </button>
                            </div>
                        </div>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition mb-4" onclick="proceedToPayment()">
                            ดำเนินการชำระเงิน
                        </button>
                        
                        <div class="text-center text-sm text-gray-500">
                            <p>การชำระเงินได้รับการรับรองความปลอดภัย</p>
                            <div class="flex justify-center space-x-2 mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Payment Modal -->
            <div id="payment-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-md mx-4">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-bold">เลือกวิธีการชำระเงิน</h3>
                            <button class="text-gray-500 hover:text-gray-700" onclick="closePaymentModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        
                        <div class="space-y-4 mb-6">
                            <div class="border rounded-lg p-4 flex items-center cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="payment-method" id="credit-card" class="mr-3">
                                <label for="credit-card" class="flex-grow cursor-pointer">
                                    <div class="font-medium">บัตรเครดิต / เดบิต</div>
                                    <div class="text-sm text-gray-500">Visa, Mastercard, JCB</div>
                                </label>
                                <div class="flex space-x-1">
                                    <div class="w-8 h-6 bg-blue-600 rounded"></div>
                                    <div class="w-8 h-6 bg-red-500 rounded"></div>
                                    <div class="w-8 h-6 bg-green-500 rounded"></div>
                                </div>
                            </div>
                            
                            <div class="border rounded-lg p-4 flex items-center cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="payment-method" id="qr-payment" class="mr-3">
                                <label for="qr-payment" class="flex-grow cursor-pointer">
                                    <div class="font-medium">QR พร้อมเพย์</div>
                                    <div class="text-sm text-gray-500">สแกนจ่ายด้วยแอปธนาคารของคุณ</div>
                                </label>
                                <div class="w-8 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="border rounded-lg p-4 flex items-center cursor-pointer hover:bg-gray-50">
                                <input type="radio" name="payment-method" id="bank-transfer" class="mr-3">
                                <label for="bank-transfer" class="flex-grow cursor-pointer">
                                    <div class="font-medium">โอนเงินผ่านธนาคาร</div>
                                    <div class="text-sm text-gray-500">โอนเงินและอัพโหลดสลิป</div>
                                </label>
                                <div class="w-8 h-8 bg-gray-200 rounded flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition" onclick="completePayment()">
                            ยืนยันการชำระเงิน
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Payment Success Modal -->
            <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-md mx-4">
                    <div class="p-6 text-center">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">การชำระเงินสำเร็จ!</h3>
                        <p class="text-gray-600 mb-6">ขอบคุณสำหรับการสั่งซื้อ คุณสามารถติดตามสถานะการจัดส่งได้ในหน้าติดตามสินค้า</p>
                        <div class="flex space-x-4">
                            <button class="flex-1 bg-gray-200 text-gray-800 py-2 rounded-lg font-medium hover:bg-gray-300 transition" onclick="closeSuccessModal()">
                                ปิด
                            </button>
                            <button class="flex-1 bg-blue-600 text-white py-2 rounded-lg font-medium hover:bg-blue-700 transition" onclick="goToTracking()">
                                ติดตามสินค้า
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Page -->
        <div id="account" class="page">
            <h2 class="text-2xl font-bold mb-6">บัญชีของฉัน</h2>
            
            <div class="lg:flex gap-8">
                <!-- Account Navigation -->
                <div class="lg:w-1/4 mb-6 lg:mb-0">
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="p-6 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-medium text-lg">สมชาย ใจดี</h3>
                                    <p class="text-blue-100">somchai@example.com</p>
                                </div>
                            </div>
                        </div>
                        <nav class="p-4">
                            <ul class="space-y-2">
                                <li>
                                    <button class="w-full text-left px-4 py-2 rounded-lg bg-blue-50 text-blue-600 font-medium" onclick="showAccountTab('profile')">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                            </svg>
                                            ข้อมูลส่วนตัว
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <button class="w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showAccountTab('orders')">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                                            </svg>
                                            ประวัติการสั่งซื้อ
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <button class="w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showAccountTab('address')">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                            </svg>
                                            ที่อยู่จัดส่ง
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <button class="w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showAccountTab('wishlist')">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                            </svg>
                                            สินค้าที่สนใจ
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <button class="w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showAccountTab('settings')">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.```
																			 <hr>
<footer>© 2025 Computer Store</footer>
</body>
</html>
