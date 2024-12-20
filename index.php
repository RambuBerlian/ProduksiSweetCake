<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sweet Cake</title>  
    <link rel="stylesheet" href="style.css">  
</head>  
<body>  
    <div id="home">  
        <div class="container">  
            <div class="header">  
                <div class="logo">  
                    <img src="cake1.jpg" alt="Sweet Cake Logo">  
                </div> 
                <div class="nav">  
                    <a href="#" id="home-link">Home</a>  
                    <a href="#" id="about-us-link">About Us</a>  
                    <a href="#" id="contact-link">Contact</a>  
                </div>  
            </div>  
            <div class="content">  
                <h1>a taste that makes<br>sweet memories!</h1>  
                <a href="#" class="button" id="login-link">Sign In</a>  
            </div>  
            <div class="cakes">  
                <div class="cake" style="position: absolute; top: 38%; left: 27%; transform: translate(-50%, -50%);">  
                    <img src="C1.png" alt="Cupcake" class="cake-image">  
                </div>  
                <div class="cake" style="position: absolute; top: 38%; left: 69%; transform: translate(-50%, -50%);">  
                    <img src="C2.png" alt="Cake" class="cake-image">  
                </div>  
               
            </div>  
            <div class="footer">© sweet cakeshop 2024</div>  
        </div>  
    </div>  

    <!-- Bagian Login --> 
    <div id="login" style="display:none;">  
        <div class="container">  
            <h2>LOGIN</h2> 
            <input type="text" id="username" placeholder="Username">  
            <input type="password" id="password" placeholder="Password">  
            
            <!-- Checkbox untuk verifikasi manusia -->
            <div id="captcha">
                <input type="checkbox" id="human-check">
                <label for="human-check">Saya bukan robot</label>
            </div>
    
            <p class="forgot-password">Forgot Password?</p>  
            <button id="sign-in" onclick="login()">SIGN IN</button>
            <p class="register-link">Don't have an account? <a href="#" id="register-link">Register here</a></p>
        </div>  
    
        <div id="snackbar" style="display:none; position:fixed; bottom:10px; left:50%; transform:translateX(-50%); background-color:green; color:white; padding:10px; border-radius:5px;"></div>
    </div>  

    <!-- Bagian Create Account (Register) -->  
    <div id="register" style="display:none;">  
        <div class="container">  
            <h2>CREATE YOUR ACCOUNT!</h2>  
            <div class="label-container">  
                <label for="email">Email</label>  
                <input type="text" placeholder="Email" id="email">  
            </div>  
            <div class="label-container">  
                <label for="new-username">Username</label>  
                <input type="text" placeholder="Username" id="new-username">  
            </div>  
            <div class="label-container">  
                <label for="new-password">Password</label>  
                <input type="password" placeholder="Password" id="new-password">  
            </div>  
            <button id="sign-up">REGISTER</button>  
            <p class="register-link">Already have an account? <a href="#" id="back-to-login-link">Sign in here</a></p>  
        </div>  
    </div>  

    <!-- Bagian Produk -->  
    <div id="products" style="display:none;">  
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
            <div class="products">  
                <div class="product">  
                    <img src="cake3.jpg" alt="Cupcake">  
                    <h3>Sweet Cake Beige Cupcakes</h3>  
                    <p>Rp. 35.500,00</p>  
                    <a href="#" class="add">Add</a>  
                </div>  
                <div class="product">  
                    <img src="cake7.jpg" alt="Cookies">  
                    <h3>Sweet Cake Chocolate Chip Cookies</h3>  
                    <p>Rp. 15.000,00</p>  
                    <a href="#" class="add">Add</a>  
                </div>  
                <div class="product">  
                    <img src="cake5.jpg" alt="Cake">  
                    <h3>Sweet Cake Pink Cake</h3>  
                    <p>Rp. 80.000,00</p>  
                    <a href="#" class="add">Add</a>  
                </div>  
                <div class="product">  
                    <img src="cake6.jpg" alt="Cheesecake">  
                    <h3>Sweet Cake Blueberry Cheesecake</h3>  
                    <p>Rp. 28.000,00</p>  
                    <a href="#" class="add">Add</a>  
                </div>  
            </div>  
            <div class="footer">© sweet cakeshop 2024</div>  
        </div>  
    </div>  

    <!-- Transaction Section -->  
    <div id="transaction" style="display:none;"> 
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
            <div class="transaction-container">  
                <h1>Transaction</h1>  
                <button class="tambah-data">Tambah Data</button>  
                <table class="data-table">  
                    <thead>  
                        <tr>  
                            <th>Nama</th>  
                            <th>Jenis Kue</th>  
                            <th>Harga</th>  
                            <th>Tanggal</th>  
                            <th>Action</th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td></td>  
                            <td></td>  
                            <td></td>  
                            <td></td>  
                            <td><a href="#" class="edit-link">Edit</a> | <a href="#" class="delete-link">Hapus</a></td>  
                        </tr>  
                    </tbody>  
                </table>  
                <div class="input-transaction" style="display:none">  
                    <h2>Input Transaction</h2>  
                    <form id="transactionForm">  
                        <div class="form-group">  
                            <label for="nama">Nama</label>  
                            <input type="text" id="nama" name="nama" placeholder="Nama" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="jenis">Jenis Kue</label>  
                            <input type="text" id="jenis" name="jenis" placeholder="Jenis Kue" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="harga">Harga</label>  
                            <input type="number" id="harga" name="harga" placeholder="Harga" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="tanggal">Tanggal</label>  
                            <input type="date" id="tanggal" name="tanggal" required>  
                        </div>  
                        <button type="submit">Simpan</button>  
                      
                    </form>  
                </div>  
            </div>  
            <div class="footer">© sweet cakeshop 2024</div>  
        </div>  
    </div>  

    <script>  
        // Existing JavaScript code
        const loginLink = document.getElementById('login-link');  
        const signInButton = document.getElementById('sign-in');  
        const registerLink = document.getElementById('register-link');  
        const backToLoginLink = document.getElementById('back-to-login-link');  
        const homeSection = document.getElementById('home');  
        const loginSection = document.getElementById('login');  
        const registerSection = document.getElementById('register');  
        const productsSection = document.getElementById('products');  
        const transactionSection = document.getElementById('transaction');

        loginLink.addEventListener('click', () => {  
            homeSection.style.display = 'none';  
            loginSection.style.display = 'block';  
        });  

        registerLink.addEventListener('click', () => {  
            loginSection.style.display = 'none';  
            registerSection.style.display = 'block';  
        });  

        backToLoginLink.addEventListener('click', () => {  
            registerSection.style.display = 'none';  
            loginSection.style.display = 'block';  
        });  

        signInButton.addEventListener('click', () => {  
            loginSection.style.display = 'none';  
            productsSection.style.display = 'block';  
        });  

        const signUpButton = document.getElementById('sign-up');  
        signUpButton.addEventListener('click', () => {  
            registerSection.style.display = 'none';  
            productsSection.style.display = 'block';  
        });  

        const logoutLink = document.getElementById('logout-link');  

        logoutLink.addEventListener('click', () => {  
            productsSection.style.display = 'none';  
            transactionSection.style.display = 'none';
            homeSection.style.display = 'block';      
        });  

        // New JavaScript code for Transaction functionality
        const transactionLink = document.getElementById('transaction-link');
        const tambahDataButton = document.querySelector('.tambah-data');
        const inputTransaction = document.querySelector('.input-transaction');
        const transactionForm = document.getElementById('transactionForm');

        transactionLink.addEventListener('click', () => {
        productsSection.style.display = 'none'; 
        transactionSection.style.display = 'block';
        });

        tambahDataButton.addEventListener('click', () => {
            inputTransaction.style.display = 'block';
        });

        transactionForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const nama = document.getElementById('nama').value;
            const jenis = document.getElementById('jenis').value;
            const harga = document.getElementById('harga').value;
            const tanggal = document.getElementById('tanggal').value;

            const tableBody = document.querySelector('.data-table tbody');
            const newRow = tableBody.insertRow();
            newRow.insertCell().textContent = nama;
            newRow.insertCell().textContent = jenis;
            newRow.insertCell().textContent = harga;
            newRow.insertCell().textContent = tanggal;
            newRow.insertCell().innerHTML = `<a href="#" class="edit-link">Edit</a> | <a href="#" class="delete-link">Hapus</a>`;

            inputTransaction.style.display = 'none';
            transactionForm.reset();
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('edit-link')) {
                e.preventDefault();
                const row = e.target.closest('tr');
                const cells = row.cells;

                document.getElementById('nama').value = cells[0].textContent;
                document.getElementById('jenis').value = cells[1].textContent;
                document.getElementById('harga').value = cells[2].textContent;
                document.getElementById('tanggal').value = cells[3].textContent;

                inputTransaction.style.display = 'block';
                row.remove();
            }

            if (e.target && e.target.classList.contains('delete-link')) {
                e.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    e.target.closest('tr').remove();
                }
            }
        });
        function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const humanCheck = document.getElementById('human-check').checked; // Memeriksa status checkbox

        if (username && password) {
            if (humanCheck) { // Memverifikasi apakah checkbox dicentang
            const snackbar = document.getElementById('snackbar');

            // Sembunyikan snackbar sebelumnya jika ada
            if (snackbar.style.display === 'block') {
                clearTimeout(snackbarTimeout); 
            }

            snackbar.style.display = 'block';
            snackbar.textContent = `Login berhasil! Username: ${username}`;

            snackbarTimeout = setTimeout(() => {
                snackbar.style.display = 'none';
                loginSection.style.display = 'none';  
                productsSection.style.display = 'block';  
            }, 3000);
        } else {
            alert('Mohon centang bahwa Anda bukan robot!'); // Pesan jika checkbox tidak dicentang
        }
        } else {
        alert('Mohon masukkan username dan password!');
        }
    }
    </script>  
</body>  
</html>