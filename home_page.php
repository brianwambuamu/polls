<?php

session_start();
if (!isset($_SESSION['email']) ) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Political Opinion Poll</title>
  <link rel="stylesheet" href="home.css">
  <script src="script.js"></script>
</head>
<body>

  <!-- Header / Navigation -->
  <header class="bg-blue-700 text-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">🗳️ Political Opinion Poll</h1>
      <nav class="space-x-6 hidden md:flex">
        <a href="home_page.php" onClick="CloseMobileMenu">Home</a>
        <a href="take-poll.php">Take Poll</a>
        <a href="#contact">Contact</a>
         <button onclick="window.location.href='logout.php'">logout</button>
      </nav>
      <button class="hambuger" id="hambuger-icon"><span onclick="openNavbar()">☰</span></button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
        Welcome  <span><?= $_SESSION['name']; ?></span>.<br>Share Your Opinion. Shape the Future.
      </h2>
      <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">
        This is a non-partisan plartform where citizens can share.<br>Join thousands of citizens sharing their views on key political issues and policies.
      </p>
      <a
        href="#polls"
        class="inline-block bg-white text-blue-700 font-semibold px-6 py-3 rounded shadow hover:bg-gray-100 transition"
      >
        Take a Poll Now
      </a>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-12">Why Join Our Platform?</h3>
      <div class="grid md:grid-cols-3 gap-10 text-center">
        <div class="p-6 border rounded-lg shadow hover:shadow-xl transition">
          <h4 class="text-xl font-semibold mb-3">Easy to Use</h4>
          <p>Simple, intuitive interface for taking polls in just a few clicks.</p>
        </div>
        <div class="p-6 border rounded-lg shadow hover:shadow-xl transition">
          <h4 class="text-xl font-semibold mb-3">Real-Time Results</h4>
          <p>View live updates and trends based on real user responses.</p>
        </div>
        <div class="p-6 border rounded-lg shadow hover:shadow-xl transition">
          <h4 class="text-xl font-semibold mb-3">Impactful Insights</h4>
          <p>Your voice helps shape policy decisions and public discourse.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Poll Preview Section -->
  <section id="polls" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Current Poll</h3>
      <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form id="pollForm">
          <h4 class="text-xl font-semibold mb-4">What should be the top government priority?</h4>
          <div id="optionsContainer">
            <label class="block mb-3">
              <input type="radio" name="priority" value="Economy and Jobs" required/>
              Economy and Jobs
            </label>
            <label class="block mb-3">
              <input type="radio" name="priority" value="Healthcare"/>
              Healthcare
            </label>
            <label class="block mb-3">
              <input type="radio" name="priority" value="Education"/>
              Education
            </label>
            <label class="block mb-3">
              <input type="radio" name="priority" value="Climate Change"/>
              Climate Change
            </label>
            <label class="block mb-3">
              <input type="radio" name="priority" value="National Security"/>
              National Security
            </label>
            <label class="block mb-3">
              <input type="radio" name="priority" value="Immigration"/>
              Immigration
            </label>
          </div>
          <button
            type="submit"
            class="mt-6 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition"
          >
            Submit Response
          </button>
          <div id="thankYouMessage" class="hidden mt-4 text-green-600 font-semibold text-center">
            Thank you for your response!
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-8">About Us</h3>
      <p class="text-lg max-w-3xl mx-auto">
        VoiceYourVote is a non-partisan platform dedicated to empowering citizens by collecting and analyzing public opinion on political issues. Our mission is to make civic engagement accessible and impactful for everyone.
      </p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-6">Get In Touch</h3>
      <p class="text-lg mb-6 max-w-xl mx-auto">
        Have questions or want to suggest a poll topic? Reach out to our team anytime.
      </p>
      <a
        href="mailto:Politics@PoliticalOpinionPoll.com"
        class="inline-block bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition"
      >
        Send us an Email
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6 text-center">
      <p>&copy; 2025 PoliticalOpinionPoll | All rights reserved.</p>
    </div>
  </footer>

  <!-- Script -->
  <script>
    document.getElementById("pollForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const thankYou = document.getElementById("thankYouMessage");
      thankYou.classList.remove("hidden");
      this.reset();
    });
    function openNavbar() {
    const nav = document.querySelector('header nav');
    if (nav.style.display === "table") {
        nav.style.display = "none";
    } else {
        nav.style.display = "table";
    }
    nav.classList.toggle("active")
    }

  </script>

</body>
</html>