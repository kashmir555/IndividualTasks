<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abronex Global | Study Abroad</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: "#00C4B4",
            brandDark: "#1C3D81",
          },
          fontFamily: {
            primary: ["Neue Montreal", "sans-serif"],
            secondary: ["Inter", "sans-serif"],
          },
        },
      },
    };
  </script>

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>

<body class="font-primary text-gray-800">

<!-- ================= NAVBAR ================= -->
<header class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">

      <!-- Logo -->
      <img
        src="Logo/Abronex_Global_Logo.png"
        alt="Abronex Global"
        class="h-10 w-auto"
      />

      <!-- Nav Links -->
      <nav class="hidden md:flex items-center gap-8 font-secondary">
        <a href="#home" class="hover:text-brand transition">Home</a>
        <a href="#services" class="hover:text-brand transition">Services</a>
        <a href="#about" class="hover:text-brand transition">About</a>
        <a href="#contact" class="hover:text-brand transition">Contact</a>
      </nav>

      <!-- CTA -->
      <a
        href="#contact"
        class="hidden md:inline-block px-6 py-3 bg-brand text-white rounded-xl shadow hover:scale-105 transition"
      >
        Free Consultation
      </a>

      <!-- Mobile Menu Icon -->
      <button class="md:hidden">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

    </div>
  </div>
</header>
<!--  END NAVBAR -->


<!-- HERO SECTION  -->
<section
  id="home"
  class="relative min-h-screen pt-28 bg-gradient-to-br from-[#00C4B4]/10 to-white flex items-center"
>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

   <!--Text Part-->
    <div>
      <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/80 rounded-full shadow font-secondary text-sm">
        ⭐ Trusted by <strong>5,000+</strong> Students Worldwide
      </div>

      <h1 class="text-5xl lg:text-6xl font-bold text-brandDark mb-6 leading-tight">
        Study Abroad <br />
        Made <span class="text-brand">Simple</span>
      </h1>

      <p class="text-xl text-gray-600 mb-8 font-secondary max-w-xl">
        Expert guidance for admissions, test prep, and global education pathways.
      </p>

      <div class="flex gap-4">
        <a
          href="#services"
          class="px-8 py-4 bg-brand text-white rounded-xl shadow hover:scale-105 transition"
        >
          Explore Services
        </a>
        <a
          href="#contact"
          class="px-8 py-4 border border-brand text-brand rounded-xl hover:bg-brand hover:text-white transition"
        >
          Free Consultation
        </a>
      </div>
    </div>

    <!--Image Part-->
    <div class="flex justify-center lg:justify-end">
      <div class="hero-image-wrapper">
        <img
          src="Logo/Australia Opera House.jpg"
          alt="Study Abroad Destination"
          class="hero-image"
        />
      </div>
    </div>

  </div>
</section>


<!--Our Service Section-->

<section id="services" class="relative py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Header -->
    <div class="text-center mb-16">
      <div class="inline-flex px-4 py-2 bg-brand/10 rounded-full mb-4">
        <span class="text-sm font-semibold text-brand">OUR SERVICES</span>
      </div>
      <h2 class="text-4xl lg:text-5xl font-bold text-brandDark mb-4">
        Comprehensive Educational Solutions
      </h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto font-secondary">
        From college applications to career planning, we provide end-to-end support.
      </p>
    </div>

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="service-card md:col-span-2">
        <h3 class="text-2xl font-bold text-brandDark mb-2">College Admissions</h3>
        <p class="text-gray-600 font-secondary">From selection to acceptance.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Test Preparation</h3>
        <p class="text-gray-600 font-secondary">SAT, ACT, GRE, GMAT & more.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Career Counseling</h3>
        <p class="text-gray-600 font-secondary">Professional career guidance.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Goal Planning</h3>
        <p class="text-gray-600 font-secondary">Structured success roadmap.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Essay Writing</h3>
        <p class="text-gray-600 font-secondary">Stand-out personal statements.</p>
      </div>

      <div class="service-card md:col-span-2">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Mentorship Program</h3>
        <p class="text-gray-600 font-secondary">1-on-1 guidance from experts.</p>
      </div>

    </div>
  </div>
<section class="w-full py-20 bg-white flex items-center justify-center">
  <p class="text-center text-lg md:text-xl font-secondary text-gray-500">
    Hello More Yet to Come — See You in Next Module!
  </p>
</section>