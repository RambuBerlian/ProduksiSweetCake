<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sweet Cake</title>  
    <style>  
        body {  
            margin: 0;  
            padding: 0;  
            font-family: sans-serif;  
            background-color: #f5f5f5;  
            color: #333;  
        }  
        
        .container {  
            max-width: 1200px;  
            margin: 0 auto;  
            padding: 20px;  
        }  

        .header {  
            display: flex;  
            align-items: center;  
            justify-content: space-between;  
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 8px;
        }   

        .logo {  
            margin-right: 20px;  
        }  

        .logo img {  
            height: 40px;  
        }  

        .nav {  
            display: flex;  
            align-items: center;  
        }  

        .nav a {  
            color: #f70070;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }  

        .nav a:hover {
            background-color: #f70070;
            color: #fff;
        }

        .content {  
            text-align: center;  
            margin-top: 50px;  
        }  

        h1 {  
            font-size: 3em;  
            margin-bottom: 20px;  
        }  

        .button {  
            display: inline-block;  
            padding: 10px 20px;  
            background-color: #f70070;  
            color: #fff;  
            text-decoration: none;  
            border-radius: 5px;  
            margin-top: 20px;  
        }  

        .products {  
            display: flex;  
            justify-content: space-between;  
            margin-top: 50px;  
            flex-wrap: wrap;  
        }  

        .product {  
            background-color: #fff;  
            padding: 20px;  
            border-radius: 10px;  
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
            text-align: center;  
            width: 23%;  
            margin-bottom: 20px;  
        }  

        .product img {  
            width: 100%;  
            height: auto;  
            margin-bottom: 10px;  
            border-radius: 10px;  
        }  

        .product h3 {  
            margin-bottom: 5px;  
            font-size: 1.2em; 
            color: #f70070;  
        }  

        .product p {  
            margin-bottom: 10px;  
            font-size: 0.9em;  
        }  

        .product .add {  
            background-color: #f70070;  
            color: #fff;  
            padding: 10px 20px;  
            border: none;  
            border-radius: 5px;  
            cursor: pointer;  
            text-decoration: none;  
        }  

        .footer {  
            text-align: center;  
            margin-top: 50px;  
            font-size: 0.8em;  
        }  

        .cakes {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            margin-top: 50px;  
        }  

        .cake {  
            margin: 0 20px;  
        }  

        .cake img {  
            width: 150px;  
            height: auto;  
        }  

        .cake-image {
            width: 10px;  /* Ubah nilai ini untuk memperkecil atau memperbesar gambar */
            height: auto;  /* Menjaga proporsi gambar */
        }

        .about-us {  
            margin-top: 50px;  
            text-align: center;  
        }  

        .about-us h2 {  
            font-size: 2em;  
            margin-bottom: 20px;  
        }  

        .about-us p {  
            font-size: 1em;  
            line-height: 1.5;  
            margin-bottom: 20px;  
        }  

        .contact {  
            margin-top: 50px;  
            text-align: center;  
        }  

        .contact h2 {  
            font-size: 2em;  
            margin-bottom: 20px;  
        }  

        .contact p {  
            font-size: 1em;  
            line-height: 1.5;  
            margin-bottom: 20px;  
        }  

        .contact ul {  
            list-style: none;  
            padding: 0;  
            margin: 0;  
        }  

        .contact li {  
            margin-bottom: 10px;  
        }  

        .contact a {  
            text-decoration: none;  
            color: #f70070;  
        }  

        .back-to-top {  
            position: fixed;  
            bottom: 20px;  
            right: 20px;  
            background-color: #f70070;  
            color: #fff;  
            padding: 10px;  
            border-radius: 5px;  
            cursor: pointer;  
            display: none;  
        }  

        .back-to-top:hover {  
            background-color: #ddd;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <div class="header">  
            <div class="logo">  
                <img src="cake1.jpg" alt="Sweet Cake Logo">  
            </div>  
            <div class="nav">  
                <a href="#home" id="home-link">Home</a>  
                <a href="#products" id="products-link">Products</a>  
                <a href="#about-us" id="about-us-link">About Us</a>  
                <a href="#contact" id="contact-link">Contact</a>  
                <a href="#transaction" id="transaction-link">Transaction</a>  
                <a href="#" id="logout-link">Log Out</a>  
            </div>  
        </div>  
    </div>  

     <!-- Elemen untuk menampilkan greeting dan waktu -->
     <div class="home-content">
        <h2 id="text"></h2>
        <h3 id="date"></h3>
    </div>

    <div class="products" id="products">  
        <div class="product">  
            <img src="cake3.jpg" alt="Cupcake">   
            <h3>Sweet Cake Beige Cupcakes</h3>  
            <p>Rp. 35.500.00</p>  
            <a href="#" class="add">Add</a>  
        </div>  
        <div class="product">  
            <img src="cake7.jpg" alt="Cookies">  
            <h3>Sweet Cake Chocolate Chip Cookies</h3>  
            <p>Rp. 15.000.00</p>  
            <a href="#" class="add">Add</a>  
        </div>  
        <div class="product">  
            <img src="cake5.jpg" alt="Cake">  
            <h3>Sweet Cake Pink Cake</h3>  
            <p>Rp. 80.000.00</p>  
            <a href="#" class="add">Add</a>  
        </div>  
        <div class="product">  
            <img src="cake6.jpg" alt="Cheesecake">   
            <h3>Sweet Cake Blueberry Cheesecake</h3>  
            <p>Rp. 28.000.00</p>  
            <a href="#" class="add">Add</a>  
        </div>  
    </div>  
    <div class="about-us" id="about-us">  
        <h2>About Us</h2>  
        <p>Sweet Cake adalah toko kue yang menawarkan berbagai macam kue lezat dengan bahan-bahan berkualitas tinggi. Kami berkomitmen untuk memberikan pengalaman manis yang tak terlupakan bagi setiap pelanggan kami. Di Sweet Cake, Anda dapat menemukan kue yang sempurna untuk setiap kesempatan, mulai dari kue ulang tahun hingga kue pernikahan.</p>  
        <p>Tim kami yang berpengalaman dan kreatif selalu siap untuk membantu Anda dalam menciptakan kue impian Anda. Kami juga menawarkan layanan kustomisasi, sehingga Anda dapat menyesuaikan kue Anda dengan desain dan rasa yang Anda inginkan.</p>  
    </div>  
    <div class="contact" id="contact">  
        <h2>Contact Us</h2>  
        <p>Hubungi kami jika Anda memiliki pertanyaan atau ingin memesan kue:</p>  
        <ul>  
            <li>Telepon: +62 812 3456 7890</li>  
            <li>Email: sweetcake@gmail.com</li>  
            <li>Alamat: Jl. Sudirman No. 123, Jakarta Selatan</li>  
        </ul>  
    </div>  

    <div class="footer">  
        © sweet cakeshop 2024  
    </div>  
    <a href="#" class="back-to-top" id="back-to-top">^</a>  

    <script>  
        const homeLink = document.getElementById('home-link');  
        const productsLink = document.getElementById('products-link');  
        const aboutUsLink = document.getElementById('about-us-link');  
        const contactLink = document.getElementById('contact-link');
        const transactionLink = document.getElementById('transaction-link');
        const logoutLink = document.getElementById('logout-link');   
        const backToTop = document.getElementById('back-to-top');  

        homeLink.addEventListener('click', () => {  
            window.location.hash = 'home';  
        });  

        productsLink.addEventListener('click', () => {  
            window.location.hash = 'products';  
        });  

        aboutUsLink.addEventListener('click', () => {  
            window.location.hash = 'about-us';  
        });  

        contactLink.addEventListener('click', () => {  
            window.location.hash = 'contact';  
        });  

        transactionLink.addEventListener('click', function(event) {  
            event.preventDefault();  
            const transactionSection = document.getElementById('transaction');  
            transactionSection.scrollIntoView({ behavior: 'smooth' });  
        });  

        logoutLink.addEventListener('click', function(event) {  
            event.preventDefault();  
            let confirmLogout = confirm("Apakah anda yakin untuk logout?");
            if (confirmLogout) {
                // Redirect ke halaman index.html
                window.location.href = 'index.php';
            } 
        });  

        window.addEventListener('scroll', () => {  
            if (window.pageYOffset > 100) {  
                backToTop.style.display = 'block';  
            } else {  
                backToTop.style.display = 'none';  
            }  
        });  

        backToTop.addEventListener('click', () => {  
            window.scrollTo({  
                top: 0,  
                behavior: 'smooth'  
            });  
        });

        // Fungsi untuk menampilkan waktu
        function myFunction() {  
            const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];  
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];  
            const date = new Date();  
            let jam = date.getHours();  
            let tanggal = date.getDate();  
            let hari = days[date.getDay()];  
            let bulan = months[date.getMonth()];  
            let tahun = date.getFullYear();  

            let m = checkTime(date.getMinutes());  
            let s = checkTime(date.getSeconds());  

            document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;  
            requestAnimationFrame(myFunction);  
        }  

        function checkTime(i) {  
            return i < 10 ? "0" + i : i;  
        }  

        // Pop-up greeting berdasarkan waktu
        window.onload = function () {  
            let nama = prompt("Masukkan Nama Anda:", "Admin");  
            let jam = new Date().getHours();  
            if (nama != null) {  
                if (jam >= 4 && jam <= 10) {  
                    document.getElementById("text").innerHTML = `Selamat Pagi, ${nama}!`;  
                } else if (jam >= 11 && jam <= 14) {  
                    document.getElementById("text").innerHTML = `Selamat Siang, ${nama}!`;  
                } else if (jam >= 15 && jam <= 18) {  
                    document.getElementById("text").innerHTML = `Selamat Sore, ${nama}!`;  
                } else {  
                    document.getElementById("text").innerHTML = `Selamat Malam, ${nama}!`;  
                }  
            }  
            myFunction();  
        };  
    </script>  
</body>  
</html>