/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

.header {
  margin-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}

/* ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ START ━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
Custom CSS */

body {
  font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Roboto Slab', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
  font-weight: 700;
}

.dropdown-menu li p {
  padding: 3px 20px;
  margin-bottom: 0;
}

.dropdown-alert .dropdown-menu {
  min-width: 284px;
}

.dropdown-alert button {
  margin-top: 10px; /* align with heading */
}

#mce-success-response {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6
}

.logo {
  background: -o-linear-gradient(right, #0277BD 75%, #00C853);
  background: -webkit-linear-gradient(right, #0277BD 75%, #00C853);
  background: linear-gradient(right, #0277BD 75%, #00C853);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@media (min-width: 768px) {
  .der-koch {
    position: absolute;
    bottom: -270px;
    height: 287px;
  }
}

@media (max-width: 767px) {
  .der-koch {
    position: relative;
    left: 50%;
  }

  .der-koch__text {
    background-image: -o-linear-gradient(to bottom, white, transparent);
    background-image: -webkit-linear-gradient(to bottom, white, transparent);
    background-image: linear-gradient(to bottom, white, transparent);
  }
}
