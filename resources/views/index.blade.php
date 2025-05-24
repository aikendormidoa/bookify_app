<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bookify - Event Booking</title>
  <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />
  {{-- Security Headers --}}
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self' https://images.unsplash.com; style-src 'self' 'unsafe-inline'; script-src 'self';">
  <meta http-equiv="X-Frame-Options" content="DENY">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  {{-- Force HTTPS (should also be set in server config) --}}
  <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains">
</head>
<body>
<header>
  <h1>Bookify</h1>
  <nav>
    <a href="#home">Home</a>
    <a href="#auth">Login/Register</a>
    <a href="#events">Events</a>
    <a href="#admin-panel">Admin Panel</a>
    <a href="#booking-section">Booking</a>
  </nav>
</header>

<main>
  <!-- Home Page -->
  <section id="home">
    <div class="hero-section">
      <h2>Welcome to Bookify</h2>
      <p class="lead">Your one-stop platform to book events effortlessly.</p>
      <a href="#auth" class="cta-button">Get Started</a>
    </div>

    <div class="feature-cards">
      <div class="feature-card">
        <i class="feature-icon">📅</i>
        <h3>Easy Event Booking</h3>
        <p>Find and book events like Birthday Parties, Weddings, Debuts and more in just a few clicks.</p>
      </div>
      <div class="feature-card">
        <i class="feature-icon">👤</i>
        <h3>User Friendly</h3>
        <p>Simple login and registration system for a personalized experience.</p>
      </div>
      <div class="feature-card">
        <i class="feature-icon">💳</i>
        <h3>Secure Payments</h3>
        <p>Integrated secure payment options including PayPal and GCash.</p>
      </div>
    </div>

    <div class="why-choose-us">
      <h2>Why Choose Bookify?</h2>
      <div class="benefits-grid">
        <div class="benefit-item">
          <div class="benefit-icon">
            <svg viewBox="0 0 24 24" width="48" height="48">
              <path fill="#4a90e2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
            </svg>
          </div>
          <h4>Efficient Planning</h4>
          <p>Streamlined event planning process with professional coordination and timely execution.</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">
            <svg viewBox="0 0 24 24" width="48" height="48">
              <path fill="#4a90e2" d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
            </svg>
          </div>
          <h4>Transparent Pricing</h4>
          <p>Comprehensive pricing packages with detailed breakdowns and competitive rates.</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">
            <svg viewBox="0 0 24 24" width="48" height="48">
              <path fill="#4a90e2" d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
            </svg>
          </div>
          <h4>Customization</h4>
          <p>Personalized event solutions tailored to your specific requirements and preferences.</p>
        </div>
        <div class="benefit-item">
          <div class="benefit-icon">
            <svg viewBox="0 0 24 24" width="48" height="48">
              <path fill="#4a90e2" d="M12 1C5.93 1 1 5.93 1 12s4.93 11 11 11 11-4.93 11-11S18.07 1 12 1zm0 20c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9zm1-9h4v2h-6V7h2v5z"/>
            </svg>
          </div>
          <h4>Dedicated Support</h4>
          <p>Round-the-clock professional assistance throughout your event planning journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Login/Register -->
  <section id="auth">
    <h2>Account</h2>
    <div class="tabs">
      <div class="tab active">Login</div>
      <div class="tab">Register</div>
    </div>

    <!-- Login Form -->
    <form method="POST" action="/login" aria-label="Login form">
      @csrf
      <label for="login-email">Email</label>
      <input type="email" id="login-email" placeholder="user@example.com" />

      <label for="login-password">Password</label>
      <input type="password" id="login-password" placeholder="Enter password" />

      <button type="submit" class="primary">Login</button>
    </form>

    <hr style="margin:2rem 0; border-color:#ddd;" />

    <!-- Register Form -->
    <form aria-label="Register form">
      <label for="register-name">Full Name</label>
      <input type="text" id="register-name" placeholder="John Doe" />

      <label for="register-email">Email</label>
      <input type="email" id="register-email" placeholder="user@example.com" />

      <label for="register-password">Password</label>
      <input type="password" id="register-password" placeholder="Create password" />

      <button type="submit" class="primary">Register</button>
    </form>
  </section>

  <!-- Event Listing -->
  <section id="events">
    <h2>Available Events</h2>
    <div id="events-list" class="feature-cards">
      <article class="event-card">
        <img src="https://images.unsplash.com/photo-1520962918697-7f55a777e8a0?auto=format&fit=crop&w=600&q=80" alt="Birthday Party" />
        <div class="event-content">
          <h3>Birthday Party</h3>
          <p>Celebrate your special day with a fantastic birthday party event.</p>
          <button>Book Now</button>
        </div>
      </article>
      <article class="event-card">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Wedding" />
        <div class="event-content">
          <h3>Wedding</h3>
          <p>Make your wedding memorable with beautiful arrangements and more.</p>
          <button>Book Now</button>
        </div>
      </article>
      <article class="event-card">
        <img src="https://images.unsplash.com/photo-1527030280862-64139fba04ca?auto=format&fit=crop&w=600&q=80" alt="Debut" />
        <div class="event-content">
          <h3>Debut</h3>
          <p>Celebrate the milestone of your debut with style and joy.</p>
          <button>Book Now</button>
        </div>
      </article>
    </div>
  </section>

<!-- Booking Section -->
  <section id="booking-section">
    <h2>Booking Form</h2>
    <form aria-label="Event booking form">
      <label for="event-select">Select Event</label>
      <select id="event-select" name="event-select">
        <option>Birthday Party</option>
        <option>Wedding</option>
        <option>Debut</option>
      </select>

      <label for="booker-name">Your Full Name</label>
      <input type="text" id="booker-name" name="booker-name" placeholder="Enter your name" />

      <label for="booker-email">Your Email</label>
      <input type="email" id="booker-email" name="booker-email" placeholder="example@domain.com" />

      <label>Payment Method</label>
      <div class="payment-options">
        <div class="payment-option selected">PayPal</div>
        <div class="payment-option">GCash</div>
      </div>

      <button type="submit" class="primary">Confirm Booking & Pay</button>
    </form>
  </section>

  <!-- Admin Panel Section -->
  <section id="admin-panel" style="margin:3rem 0; padding:2rem; background:#f8fafc; border-radius:16px; box-shadow:0 2px 16px #0001;">
    <h2 style="margin-bottom:1.5rem; color:#4a90e2;">Admin Panel</h2>
    <div class="admin-tabs" style="display:flex; gap:1rem; margin-bottom:2rem;">
      <button class="admin-tab active" onclick="showAdminTab('events')" style="flex:1; padding:0.7rem; border:none; border-radius:8px 8px 0 0; background:#eaf1fb; color:#4a90e2; font-weight:600; cursor:pointer;">Events</button>
      <button class="admin-tab" onclick="showAdminTab('bookings')" style="flex:1; padding:0.7rem; border:none; border-radius:8px 8px 0 0; background:#f0f0f0; color:#888; font-weight:600; cursor:pointer;">Bookings</button>
      <button class="admin-tab" onclick="showAdminTab('users')" style="flex:1; padding:0.7rem; border:none; border-radius:8px 8px 0 0; background:#f0f0f0; color:#888; font-weight:600; cursor:pointer;">Users</button>
    </div>
    <div id="admin-events" class="admin-content" style="display:block;">
      <h3 style="color:#4a90e2;">Manage Events</h3>
      <table style="width:100%; border-collapse:collapse; margin-bottom:1rem;">
        <thead>
          <tr style="background:#eaf1fb;">
            <th style="padding:0.7rem; text-align:left;">Event Name</th>
            <th style="padding:0.7rem; text-align:left;">Date</th>
            <th style="padding:0.7rem; text-align:left;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:0.7rem;">Birthday Party</td>
            <td style="padding:0.7rem;">2024-06-01</td>
            <td style="padding:0.7rem;">
              <button style="background:#4a90e2; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem; margin-right:0.5rem;">Edit</button>
              <button style="background:#e24a4a; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem;">Delete</button>
            </td>
          </tr>
          <tr>
            <td style="padding:0.7rem;">Wedding</td>
            <td style="padding:0.7rem;">2024-07-15</td>
            <td style="padding:0.7rem;">
              <button style="background:#4a90e2; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem; margin-right:0.5rem;">Edit</button>
              <button style="background:#e24a4a; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem;">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <button style="background:#4a90e2; color:#fff; border:none; border-radius:8px; padding:0.7rem 2rem; font-weight:600;">Add New Event</button>
    </div>
    <div id="admin-bookings" class="admin-content" style="display:none;">
      <h3 style="color:#4a90e2;">Manage Bookings</h3>
      <table style="width:100%; border-collapse:collapse; margin-bottom:1rem;">
        <thead>
          <tr style="background:#eaf1fb;">
            <th style="padding:0.7rem; text-align:left;">Booker</th>
            <th style="padding:0.7rem; text-align:left;">Event</th>
            <th style="padding:0.7rem; text-align:left;">Status</th>
            <th style="padding:0.7rem; text-align:left;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:0.7rem;">Jane Doe</td>
            <td style="padding:0.7rem;">Wedding</td>
            <td style="padding:0.7rem;">Confirmed</td>
            <td style="padding:0.7rem;">
              <button style="background:#4a90e2; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem; margin-right:0.5rem;">View</button>
              <button style="background:#e24a4a; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem;">Cancel</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="admin-users" class="admin-content" style="display:none;">
      <h3 style="color:#4a90e2;">Manage Users</h3>
      <table style="width:100%; border-collapse:collapse; margin-bottom:1rem;">
        <thead>
          <tr style="background:#eaf1fb;">
            <th style="padding:0.7rem; text-align:left;">Name</th>
            <th style="padding:0.7rem; text-align:left;">Email</th>
            <th style="padding:0.7rem; text-align:left;">Role</th>
            <th style="padding:0.7rem; text-align:left;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:0.7rem;">Admin User</td>
            <td style="padding:0.7rem;">admin@bookify.com</td>
            <td style="padding:0.7rem;">Admin</td>
            <td style="padding:0.7rem;">
              <button style="background:#4a90e2; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem; margin-right:0.5rem;">Edit</button>
              <button style="background:#e24a4a; color:#fff; border:none; border-radius:4px; padding:0.4rem 1rem;">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</main>

<footer>
  &copy; 2024 Bookify, All rights reserved.
</footer>
<script src="{{ asset('frontend/script.js') }}"></script>
</body>
</html>