<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      display: grid;
      grid-template-columns: 1fr 3fr;
      grid-template-rows: auto 1fr auto;
      grid-template-areas: "header header" "sidebar main" "footer footer";
      min-height: 100vh;
    }

    header {
      grid-area: header;
      background-color: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-buttons a {
      color: #fff;
      margin-left: 10px;
      text-decoration: none;
    }

    aside {
      grid-area: sidebar;
      padding: 10px;
    }

    main {
      grid-area: main;
      padding: 20px;
    }

    footer {
      grid-area: footer;
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    footer nav a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
    }
  </style>
  <title>Your Playlist App</title>
</head>
<body>
  <div class="container">
    <header>
      <h1>Playlist Name</h1>
      <div class="header-buttons">
        <a href="#" class="button">Edit Playlist</a>
        <a href="#" class="button">New Playlist</a>
      </div>
    </header>
    <aside>
      <h2>Saved Playlists</h2>
      <!-- Your playlist list goes here -->
    </aside>
    <main>
  <table>
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Song Title</th>
        <th>Artist Name</th>
        <th>Album Name</th>
        <th>Duration</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Song 1</td>
        <td>Artist 1</td>
        <td>Album 1</td>
        <td>3:30</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Song 2</td>
        <td>Artist 2</td>
        <td>Album 2</td>
        <td>4:15</td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</main>

    <footer>
      <p>&copy; 2023 Your Playlist App</p>
      <nav>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
    </footer>
  </div>
</body>
</html>
