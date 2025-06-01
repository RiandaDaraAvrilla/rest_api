<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rianda Dara Avrilla - Personal Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }
    header {
      background-color:rgb(131, 188, 241);
      color: white;
      padding: 2rem 1rem;
      text-align: center;
      position: relative;
    }
    header .profile-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid white;
    }
    header h1 {
      font-size: 3rem;
    }
    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }
    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .section {
      margin-bottom: 2.5rem;
    }
    h2 {
      color:rgb(50, 151, 218);
      margin-bottom: 1rem;
      border-bottom: 2px solid #ddd;
      padding-bottom: 0.5rem;
    }
    .about p,
    .social p,
    .projects p,
    .hobbies p,
    .goals p,
    .contact p {
      margin-bottom: 1rem;
    }
    .social ul {
      list-style: none;
      padding: 0;
    }
    .social li {
      margin: 0.5rem 0;
    }
    a {
      color:rgb(5, 86, 238);
      text-decoration: none;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .gallery img {
      width: 100%;
      max-width: 300px;
      border-radius: 10px;
    }
    .video {
      margin-top: 1rem;
    }
    iframe {
      width: 100%;
      height: 315px;
      border-radius: 10px;
      border: none;
    }
    .upload-section {
      margin: 2rem 0;
      padding: 1rem;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      text-align: center;
    }
    .upload-section input[type="file"] {
      margin-top: 0.5rem;
    }
    .contact-form label {
      display: block;
      margin: 0.5rem 0 0.2rem;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .contact-form button {
      padding: 0.7rem 1.5rem;
      background-color:rgb(7, 26, 61);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    footer {
      text-align: center;
      padding: 1.5rem;
      background-color: #eee;
      font-size: 0.9rem;
    }
    .flex-sections {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}

.flex-sections .section {
  flex: 1 1 30%;
  background-color: #fff;
  padding: 1rem;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
}

  </style>
</head>
<body>
  <header>
    <div class="profile-wrapper">
 <img src="img/profilerianda.png" alt="Foto Profil rianda" class="profile-pic">
      <h1>Rianda Dara Avrilla</h1>
    </div>
    <p>UI Desaigner | UX Researcher | Interaction Desaigner</p>
  </header>

  <div class="container">
    <section class="section about">
      <h2>About Me</h2>
      <p>Hi! I’m <strong>Rianda Dara Avrilla</strong>, a passionate UI Designer, UX Researcher, and Interaction Designer from Indonesia. I love crafting intuitive and engaging digital experiences that prioritize both aesthetics and user needs.</p>
      <p>With a strong foundation in design thinking, user research, and interface design, I aim to bridge the gap between technology and human interaction. I'm always eager to explore innovative solutions, collaborate with diverse teams, and grow both personally and professionally in the ever-evolving world of design. Welcome to my portfolio—where creativity meets functionality!</p>
    </section>

    <section class="section social">
      <h2>Social Media</h2>
      <ul>
        <li><strong>Instagram:</strong> <a href="https://instagram.com/rianda.avr" target="_blank">@rianda_avr</a> — 595 Followers</li>
        <li><strong>YouTube:</strong> <a href="https://youtube.com/@riandadaraavrilla?si=CqbdRxsIwpTOfTJ9" target="_blank">Rianda Dara Avrilla</a> — college assignment</li>
        <li><strong>Email:</strong> <a href="mailto:riandadara24@gmail.com">riandadara24@gmail.com</a></li>
      </ul>
    </section>

    <section class="section projects">
      <h2>My Content</h2>
      <p>✨ Instagram Reels: Sharing insights about UI/UX design, the creative process, as well as inspiration about productivity and personal development.</p>
      <p>🎥 YouTube Vlogs: Contains college assignments, design project presentations, and digital experiments as part of the academic and professional journey.</p>
      <p>📝 Collaborations: Interested in collaborating? Send an email to discuss further about the project or design collaboration. </p>
      <div class="gallery" id="image-gallery">
        <img src="img/photo1.jpeg">
        <img src="img/photo2.jpeg">
        <img src="img/photo3.jpeg">
      </div>
      <div class="upload-section">
        <h3>Upload Your Own Instagram Image</h3>
        <input type="file" id="instagramImageUpload" accept="image/*" multiple>
      </div>
      <div class="video">
        <h3>Latest YouTube Video</h3>
        <iframe src="https://www.youtube.com/embed/mhKUhs9SVWY" title="YouTube video" allowfullscreen></iframe>
        <p>Check out my YouTube channel for more content: <a href="https://youtube.com/@riandadaraavrilla?si=CqbdRxsIwpTOfTJ9" target="_blank">Rianda Dara Avrilla</a></p>
      </div>
    </section>

 <div class="flex-sections">
      <section class="section services">
        <h2>Layanan</h2>
        <p>🎯 UI Design untuk web & mobile</p>
        <p>🛍️ UX Research & usability testing</p>
        <p>🎥 Konsultasi desain digital</p>
      </section>

      <section class="section hobbies">
        <h2>Hobi & Minat</h2>
        <p>📷 Desain digital & visual</p>
        <p>🧘 Self-development & produktivitas</p>
        <p>🎶 Menonton vlog & dokumenter desain</p>
      </section>

      <section class="section goals">
        <h2>Goals</h2>
        <p>🌟 Menjadi desainer profesional di industri teknologi</p>
        <p>🤝 Berkolaborasi dengan tim kreatif global</p>
        <p>🚀 Membangun personal brand melalui media sosial</p>
      </section>
    </div>


    <section class="section contact">
      <h2>Contact Me</h2>
      <form class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </div>

  <footer>
    &copy; 2025 Rianda Dara Avrilla. All rights reserved.
  </footer>

  <script>
    document.getElementById('instagramImageUpload').addEventListener('change', function(event) {
      const files = event.target.files;
      const gallery = document.getElementById('image-gallery');

      // Clear previous images
      gallery.innerHTML = '';

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = 'Uploaded Instagram Image';
          img.style.width = '100%'; // Ensure the image fits within the gallery
          img.style.maxWidth = '300px'; // Set a max width for the images
          img.style.borderRadius = '10px'; // Add border radius for aesthetics
          gallery.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>