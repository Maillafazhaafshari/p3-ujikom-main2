{{-- Banner --}}

{{-- <!-- begin container -->
    <div class="container">
        <a href="{{route('login')}}">Masuk</a>
        <h3>Lacak Status Laundry</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        @include('frontend.modal')
    </div> --}}
{{-- End Header --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laundry</title>
  </head>
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
  }

  h1 {
    color: #02082c;
  }

  .container {
    width: 85%;
    margin: 0 auto;
  }

  .header {
    width: 100%;
    background-color: #02082c;
    color: white;
    /* flexbox */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 100px;
  }

  .header ul {
    list-style: none;
    display: flex;
  }

  .header ul li {
    /* TOP/BOTTOM LEFT/RIGHT */
    margin: 0 10px;
  }

  .header ul li a {
    text-decoration: none;
    color: white;
    font-weight: 600;
    font-size: 18px;
  }

  .hero {
    padding-top: 30px;
    background-color: #aedcf3;
  }

  .hero .container {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }
  .hero-desc {
    width: 40%;
  }
  .hero-desc > * {
    color: #02082c;
  }
  .hero-desc h1 {
    font-size: 38px;
  }
  .hero-desc p {
    font-size: 18px;
    margin: 10px 0;
  }

  /* .hero-desc a {
    display: inline-block;
    text-decoration: none;
    background-color: #02082c;
    color: white;
    padding: 10px 20px;
    border-radius: 3px;
  } */

  /* codingan serach bar */
  .input-group {
            position: absolute;
            width: 395px;
            height: 54.97px;
            left: 510px;
            top: 350px;
            margin: 50px auto;
            background: #F0EEEE;
            filter: #131212;
            border-radius: 50px;
        }

        .form-control {
            width: 314.7px;
            height: 54.97px;
            padding: 0px 15px;
            background: #F0EEEE;
            border: 0px solid #F0EEEE;
            border-radius: 50px;
            text-decoration: none;
        }

        .form-control:focus {
            outline: 0px;
            outline-color: #F0EEEE;
        }

        .btn {
            position: absolute;
            height: 54.97px;
            left: 340px;
            padding: 6px 15px;
            border: 2px solid #6d63fb;
            background-color: #636dfb;
            border-radius: 50px;
            color: #fafafa;
        }

        .btn:hover {
            background-color: #02082c;
            color: #F0EEEE;
        }

        .check {
            position: absolute;
            left: 530px;
            top: 50px;
            bottom: 87.8%;

            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 21px;
            color: #FFFFFF;
        }

  .row {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin: 30px 0;
  }
  .card {
    background-color: #02082c;
    color: white;
    padding: 40px 20px;
    margin: 0 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
  }

  .card h1 {
    color: white;
  }

  .card i {
    font-size: 45px;
    text-align: center;
  }

  .card > * {
    margin: 5px 0;
  }

  .main-spacing {
    /* Top/bottom ---- Left/Right */
    padding: 50px 0;
  }

  .why h1,
  .why p {
    text-align: center;
  }
  .row-spacing {
    width: 65%;
    margin: 0 auto;
  }

  .contact {
    color: white;
    background-color: #036596;
  }
  .contact h1 {
    color: white;
    text-align: center;
  }

  .contact form {
    width: 40%;
    /* center a div */
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    margin-top: 40px;
    /* border-width border-type border-color */
    border: 2px solid white;
    padding: 40px;
    border-radius: 15px;
  }

  .contact form input {
    background-color: transparent;
    border: 2px solid white;
    margin: 10px 0;
    color: white;
    font-size: 18px;
    padding: 5px 10px;
    border-radius: 15px;
    outline: 0;
  }

  .contact form input::placeholder {
    color: whitesmoke;
  }
  .contact form input[type="submit"] {
    background-color: #02082c;
    color: white;
    border: 0;
    cursor: pointer;
  }

  footer {
    background-color: #02082c;
    color: white;
    top: 300% ;
  }

  footer p {
    text-align: center;
    font-weight: 900;
  }
  </style>

  <body>
    <div class="header">
      <div>
        <h2><i class="fas fa-cog"></i> ME LAUNDRY</h2>
      </div>
      <ul>
        <li><a href="/login">Login</a></li>
      </ul>
    </div>

    <!-- Hero Section -->
    <div class="hero">
      <div class="container">
        <div class="hero-desc">
          <h1>Get your Laundry and dry cleaning done within 24hrs</h1>
          <p>Just <b>smile</b> & <b>relax</b>, We'll do the dirty work.</p>
          {{-- <a href="search">See your order</a> --}}
          <div class="input-group m-b-20">
          <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
          <span class="input-group-btn">
            <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i>Cari</button>
        </span>
    </div>
    @include('frontend.modal')
        </div>
        <img src="frontend/img/landing/cuci.png" alt="" />
      </div>
    </div>

    <!-- class main -->
    <div class="why main-spacing">
      <div class="container">
        <h1>Why ME Laundry</h1>
        <p>
          The only laundry company that speeds us your last minutes deliveries
        </p>

        <div class="row-spacing">
          <div class="row">
            <div class="card">
              <i class="fa-regular fa-square-check"></i>
              <h1>Get a Price</h1>
              <p>
                Tell us about you, how you like your clothes and your dry
                cleaning needs
              </p>
            </div>
            {{-- <div class="card">
              <i class="fa-solid fa-bag-shopping"></i>
              <h1>Book a Pickup</h1>
              <p>
                Tell us about you, how you like your clothes and your dry
                cleaning needs
              </p>
            </div>
          </div>
          <div class="row">
            <div class="card">
              <i class="fa-regular fa-square-check"></i>
              <h1>Get a Price</h1>
              <p>
                Tell us about you, how you like your clothes and your dry
                cleaning needs
              </p>
            </div> --}}
            <div class="card">
              <i class="fa-solid fa-bag-shopping"></i>
              <h1>Book a Pickup</h1>
              <p>
                Tell us about you, how you like your clothes and your dry
                cleaning needs
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="main-spacing">
      <p> Thank you for visiting </p>
    </footer>
  </body>
</html>
