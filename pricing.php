<?php include "header.php";?>

<section id="hero">
    <div class="containe">
        <style>
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Open Sans", sans-serif;
}

.outer_section {
  display: grid;
  place-items: center;
  min-height: 100vh;
  background-color: #171717;
}

.pricing-plans {
  gap: 32px;
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  justify-content: center;
  width: 100%;
  padding: 64px;
}

.pricing-card {
  --col: #e4e4e7;
  position: relative;
  min-width: 360px;
  padding: 32px;
  padding-bottom: 96px;
  border-radius: 4px;
  border: 1px solid #262626;
  background-color: #26262620;
  box-shadow: 0 0 32px transparent;
  text-align: center;
}

.pricing-card.basic {
  --col: #0891b2;
}

.pricing-card.standard {
  --col: #059669;
}

.pricing-card.premium {
  --col: #c026d3;
}

.pricing-card:hover {
  border-color: var(--col);
  background-color: #26262680;
  box-shadow: 0 0 32px #171717;
  transform: translateY(-16px) scale(1.02);
  transition: all 0.5s ease;
}

.pricing-card > *:not(:last-child) {
  margin-bottom: 32px;
}

.pricing-card .heading h4 {
  padding-bottom: 12px;
  color: var(--col);
  font-size: 24px;
  font-weight: normal;
}

.pricing-card .heading p {
  color: #a3a3a3;
  font-size: 14px;
  font-weight: lighter;
}

.pricing-card .price {
  position: relative;
  color: var(--col);
  font-size: 60px;
  font-weight: bold;
}

.pricing-card .price sub {
  position: absolute;
  bottom: 14px;
  color: #a3a3a3;
  font-size: 14px;
  font-weight: lighter;
}

.pricing-card .features li {
  padding-bottom: 16px;
  color: #a3a3a3;
  font-size: 16px;
  font-weight: lighter;
  text-align: left;
}

.pricing-card .features li i,
.pricing-card .features li strong {
  color: #e4e4e7;
  font-size: 16px;
  text-align: left;
}

.pricing-card .features li strong {
  padding-left: 24px;
}

.pricing-card .cta-btn {
  position: absolute;
  bottom: 32px;
  left: 50%;
  transform: translateX(-50%);
  width: 200px;
  padding: 12px;
  border-radius: 4px;
  border: 1px solid var(--col);
  background-color: var(--col);
  color: #e4e4e7;
  font-size: 20px;
  font-weight: bold;
}

.pricing-card .cta-btn:active {
  background-color: transparent;
  color: var(--col);
  transition: all 0.3s ease;
}

        </style>
    <section class="outer_section">
    <section class="pricing-plans">
      <div class="pricing-card basic">
        <div class="heading">
          <h4>BASIC</h4>
          <p>for small websites or blogs</p>
        </div>
        <p class="price">
          150
          <sub>Rs /month</sub>
        </p>
        <ul class="features">
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>1 domain</strong> name
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>10 GB</strong> of disk space
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>100GB </strong>of bandwidth
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>1 MySQL</strong> database
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>5 email</strong> accounts
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>cPanel</strong> control panel
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Free SSL</strong> certificate
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>24/7</strong> support
          </li>
        </ul>
        <button class="cta-btn"><a href="developer_siddhant.php"> SELECT</a></button>
      </div>
      <div class="pricing-card standard">
        <div class="heading">
          <h4>STANDARD</h4>
          <p>for medium-sized businesses</p>
        </div>
        <p class="price">
          250 
          <sub>Rs /month</sub>
        </p>
        <ul class="features">
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Unlimited</strong> domain name
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>50 GB</strong> of disk space
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>500GB </strong>of bandwidth
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>10 MySQL</strong> database
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>50 email</strong> accounts
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>cPanel</strong> control panel
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Free SSL</strong> certificate
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>24/7</strong> support
          </li>
        </ul>
        <button class="cta-btn"><a href="developer_siddhant.php"> SELECT</a></button>
      </div>
      <div class="pricing-card premium">
        <div class="heading">
          <h4>PREMIUM</h4>
          <p>for small businesses</p>
        </div>
        <p class="price">
          500
          <sub>Rs /month</sub>
        </p>
        <ul class="features">
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Unlimited</strong> domain name
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>100 GB</strong> of disk space
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>1TB </strong>of bandwidth
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Unlimited MySQL</strong> database
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Unlimited email</strong> accounts
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>cPanel</strong> control panel
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Free SSL</strong> certificate
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>24/7 priority</strong> support
          </li>
          <li>
            <i class="fa-solid fa-check"></i>
            <strong>Advanced</strong> security features
          </li>
        </ul>
        <button class="cta-btn"> <a href="developer_siddhant.php"> SELECT</a></button>
      </div>
    </section>
    </section>
    </div>
</section>

<?php include "footer.php";?>