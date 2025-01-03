<?php
session_start();
//if (isset($_SESSION["user"])) {
   //header("Location: index.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Company Home</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>Welcome to Car Company</h1>
            <nav>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="ourcars.php">Our Cars</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section id="about">
                <h2>About Our Company</h2>
                <p>Car Company is your trusted partner in the automotive industry. With decades of experience, we provide the best car deals, top-notch services, and a seamless car-buying experience. Our commitment to quality and customer satisfaction sets us apart.</p>
            </section>
            <section id="brands-we-have">
                <h2>Brands We Have</h2>
                <div class="brands">
                    <div class="brand">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAACgCAMAAAB+IdObAAAAZlBMVEX6+voAAAD////o6Oi8vLw3NzfPz88LCwtNTU3f39+ysrIgICDr6+vY2NhmZmaenp7z8/PCwsKVlZXIyMikpKQnJydubm5EREQwMDA8PDwVFRWsrKxzc3NfX1+Dg4OMjIxVVVV7e3sUcvLTAAAGq0lEQVR4nO2ciZKjOAyGjTgSzGWOhAQSjvd/yZXEne7amqqeEHpXf9V0wLgZfdiybCK3UiKRSCQSiUQikUgkEolEIpFIJBKJRKL/q4z9U4WfRmCBd3N/plvsw6cpFIFYP9VZQP6mBERA3iQBEZA3SUAE5E0SEAF5k/4vINUFlyu3y+k3g9yvTZbUOkXpOsv62P2NIHGiPVsBShkzfNq5zrrfBRK0uY2m207S9I/Wy/tH3xYpFik/738PyCnzDUDUduWlsqxrqIxdorPcymcWApjoC8pBQTofG8N3q+GsxGZQYAZnP1VP6mWe+wtAghoth2Q+N8ShIJ0LcjyDZjOKHRHkFpHh+WU6j0FFTYteP9e401ss0JdjgwwmQVFNBRHYZ/QTA8WMmnOV1D0ySIntobHr+Oex4DL2MgfsqQ5CYYMocILjglQO2t1R3/KuQ0kDiu19KjW2QItGgyqxWZLjgrT4sC3XI5LQuQ4tMV410OPPoMnZ+XVwwyjzPCqImwO5QmyTrWB83aOLtMO1FN27TX3D/uGV5DygjwrSYBi84WcXwWwY+LnW2slDGoO5FCClSg+MNc+DghTYXQYPbsPFMmDNJ8qOuUqARe0xQdwUY/Y07vZRqNj+NRHOVfJ4rBCYJWweDKT0API5gFj31vF89HpDlQw6R5TrZhlyA5xC6uCwIN4CQsKYcW0zVJOBfd9cCnD+OIX3g4Hc89lHJnXhNDV5gn3ZXLqg89enQ4JUNdq2ndciyBjjW7C3q90nVs6O6SNWiyftxtoy5DiI0uBvrmCohPBxUBCMH6tZLgk9eox60SsIrObIRwPBQLJ0l0E+hAPRekVCwrmWmVvvcCB3nGZNTjEICzh8Z+u1FqrHis58djgQXJ/jwFWuDE4wtODHxR6BRsUYDaNlOD4eCE+3otUrnzPGwixwNX6saj1wxeivwA4IYvU4E/Efyzmua03q0ep3LqpwJrbhOCSIdcWpb1jPcbHgKT3+mw0vcUkCzuZF3SFBrJJeo9jziDSYCHPPqunVVruN8scEwXiCky4Ik8HYZFiEDA1SamwN0PeXXzgqCHUfmsOHRXcJKnppAlkV3K5MYergS/XjgmAELCKb7fYc+ul4fGJ77XeVjwyCcvsi9SI7ZNmR5yRx9X3Ng4OQKvcZP1Bxd/uXr3p+AcifSUD+qgREQN4kARGQN0lABORNEhABeZP+UyCnH+kgICp0fqrcfJphEPxYnyYQiUQikUgkEu2kP5j6HWx2+N3MFcCEoZlP1rl/6yoGprzGbya/u8+D/VqvxF8RQlQ0j0eT5WSJSWtdj0mNYONxauhrXd02174t7CGZdn0Lh/9UgqHbpnuCaCtYVF0BjUzGBBT3QXYWVnB6jiDxKQgSWkbG4zfSzxqfe1Sub9FxPn3Kt91ziaU36+0YwO6XU9fGc0rATDnDtybTjQK9JKRVrXrZd3EmEDWkEBQ7dq76BWRIV+pqhzM3XOxoDj79G+2+oASbWz5m+laNLrhZEog2CQOUUa+mdK4dQdgpfX567J7cQpQjMCSJU45fg5/U5yitvAEIqfzBtalykPKhwavd5OFU1b2fODFqT0FkTUkNYWlN/z34YwuE2E9uKWeRlghOqVrdOF5RYlpLnsA98DzfEIt7XfJz+AwIHzWjj0J2ojxMxQ/+6cUDYkg+NL3xAYS7s3evQXh7SaGwWap9Xw2tQMhlplGT02UfdIC2B/eKOpTiBK5qDizUJPkXkJJ9Pqn4OXwGJLNWHZuedxzCnA10o2PanNDNNZxxSFuDcAY3pf1jzdLsSbICSb4DUWN2qUOH0Zk2v0019Hcg2KcuNAT0vNvsMyDOaC8X+wH3JhI5SM9ezdlys3Xt164F/h073zOOr5QA9diRYw1CA3E8OTtZOXbyfDQYJx/NqtFoeCr9F5BNjm255wi8Gn4pHFh6CAb5bRySUOkU3hXvSqh4AwZwBhqH7wVkiDPVIGtfd1+BQE55PwVnYd45AKpXENPzRMQoEzZTJF+DEOg9p13WKXXUbscReAWiDO86PGcZp/vF6gvI4O7W6ZHx/pFg8KgFhLueHqf0JR9/BATCZMnuu86bklYg2GpLdqyrpxn+CAIeNeTIz5nn/X4jMINkk5kmHbcddvViwhoEh4RszMhsZq+nmdmdjsjV46kmb0/O92sSk+f50pXB9uokq7FksSDEGssflwMVpUVWUG7jfIsozz068LGmPRd7m997v7br0mkF+1Jje/paY7rFdo0rX/yIRCKRSCQSiUQikUgkEolEv0//ANzOY6GPtEZwAAAAAElFTkSuQmCC" alt="Brand 1 Logo">
                        <p>Brand 1</p>
                    </div>
                    <div class="brand">
                        <img src="data:image/jpeg;base64,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" alt="Brand 2 Logo">
                        <p>Brand 2</p>
                    </div>
                    <!-- Add more brands as needed -->
                </div>
            </section>

            
            <section id="cars">
                <h2>Best sellers</h2>
                <div class="car-list">
                    <div class="car">
                        <img src="https://global.toyota/pages/models/images/alphard/alphard_w1920_02.jpg" alt="Toyota Camry">
                        <h3>Toyota Camry</h3>
                        <p>Model: 2024</p>
                        <p>Color: Black</p>
                        <p>Price: $30,000</p>
                    </div>
                    <div class="car">
                        <img src="https://global.toyota/pages/news/images/2021/07/19/1330/001.jpg" alt="Honda Accord">
                        <h3>Honda Accord</h3>
                        <p>Model: 2023</p>
                        <p>Color: White</p>
                        <p>Price: $25,000</p>
                    </div>
                    <div class="car">
                        <img src="https://global.toyota/pages/news/images/2022/04/12/1330/20220412_01_kv_w1920.jpg" alt="Ford Mustang">
                        <h3>Ford Mustang</h3>
                        <p>Model: 2024</p>
                        <p>Color: Blue</p>
                        <p>Price: $50,000</p>
                    </div>
                </div>
            </section>
            <section id="login">
                <h2>Login</h2>
                <div class="login-options">
                    <a href="login.php" class="btn btn-primary">Staff Login</a>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Car Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>


