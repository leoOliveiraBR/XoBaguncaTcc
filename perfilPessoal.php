<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<style>
body {
  background-color: ;
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}
.container {
  background-color: #fff;
  margin: 50px auto;
  padding: 20px;
  width: 80%;
  max-width: 800px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.user-info {
  text-align: center;
  margin-bottom: 30px;
}
.user-info img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}
.user-info h2 {
  margin: 0;
}
.profile-section {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}
.profile-section label {
  font-weight: bold;
}
.profile-section input[type="text"],
.profile-section input[type="email"],
.profile-section input[type="password"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 250px;
  margin-left: 10px;
}
.profile-section input[type="file"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 250px;
  margin-left: 10px;
  opacity: 0;
  cursor: pointer;
}
.profile-section .upload-button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.progress-bar {
  width: 100%;
  height: 10px;
  background-color: #eee;
  border-radius: 5px;
  overflow: hidden;
  margin-top: 10px;
}
.progress-bar .progress-fill {
  height: 100%;
  background-color: #007bff;
  width: 0%;
  border-radius: 5px;
  transition: width 0.5s ease;
}
.profile-section button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 10px;
}
.profile-section button:hover {
  opacity: 0.8;
}
.icon {
  width: 24px;
  height: 24px;
  fill: #ccc;
  margin-left: 10px;
}
.social-links {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}
.social-links label {
  font-weight: bold;
}
.social-links input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 250px;
  margin-left: 10px;
}
.social-links .icon {
  margin-left: 0;
}
.progress-container {
  width: 100%;
  margin-bottom: 10px;
}
.progress-bar {
  width: 100%;
  height: 10px;
  background-color: #eee;
  border-radius: 5px;
  overflow: hidden;
}
.progress-fill {
  height: 100%;
  background-color: #007bff;
  width: 0%;
  border-radius: 5px;
  transition: width 0.5s ease;
}
.progress-value {
  font-size: 12px;
  margin-left: 10px;
}
</style>
</head>
<body>
<div class="container">
  <div class="user-info">
    <img src="https://via.placeholder.com/150" alt="User Avatar">
    <h2>Maria Machado</h2>
  </div>
  <div class="profile-section">
    <label for="name">Name:</label>
    <input type="text" id="name" value="Maria Machado">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
  </div>
  <div class="profile-section">
    <label for="email">Email:</label>
    <input type="email" id="email" value="mariamachado2923@gmail.com">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V6h16v12z"/></svg>
  </div>
  <div class="profile-section">
    <label for="password">Password:</label>
    <input type="password" id="password" value="********">
    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
  </div>
  <div class="profile-section">
    <label for="avatar">Avatar:</label>
    <input type="file" id="avatar">
    <button class="upload-button">Upload</button>
    <div class="progress-container">
      <div class="progress-bar">
        <div class="progress-fill" style="width: 0%;"></div>
      </div>
      <span class="progress-value">0%</span>
    </div>
  </div>
  <div class="progress-container">
    <label for="saude">Saude:</label>
    <div class="progress-bar">
      <div class="progress-fill" style="width: 50%;"></div>
    </div>
    <span class="progress-value">50/100</span>
  </div>
  <div class="progress-container">
    <label for="experiencia">Experiencia:</label>
    <div class="progress-bar">
      <div class="progress-fill" style="width: 47%;"></div>
    </div>
    <span class="progress-value">47/100</span>
  </div>
  <div class="profile-section">
  </div>
  <div class="social-links">
  <!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
</head>
<body>

<html>
<head>
<body>
  <div class="container">
    <!-- your existing HTML content here -->
    <div class="profile-section">
      <button id="save-changes">Save Changes</button>
    </div>
    <div class="social-links">
      <!-- your existing HTML content here -->
    </div>
  </div>

  <script>
    const saveChangesButton = document.getElementById('save-changes');
    saveChangesButton.addEventListener('click', () => {
      alert('Configurações alteradas com sucesso!');
    });

    const saveChangesButton = document.getElementById('save-changes');
    saveChangesButton.addEventListener('click', () => {
  alert('Configurações alteradas com sucesso!');
});
  </script>
</body>
</html>
