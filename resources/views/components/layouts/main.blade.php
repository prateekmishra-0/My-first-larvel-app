<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
  <title>Your Playlist App</title>
</head>
<body>

    <header>
        <h1>Playlist Name</h1>
        <div>
            <a href="#" class="link-button" id="editPlaylistButton">Edit Playlist</a>
            <a href="#" class="link-button" id="newPlaylistButton">New Playlist</a>
        </div>
    </header>

    <nav>
        <h2>Saved Playlists</h2>
        <ul>
            <li><a href="#">Playlist 1</a></li>
            <li><a href="#">Playlist 2</a></li>
            <li><a href="#">Playlist 3</a></li>
            <!-- Add more playlists as needed -->
        </ul>
    </nav>

    <main id="mainContent">
        <!-- Default content (song list) -->
        @yield('content')   

        <!-- Form for creating a new playlist (initially hidden) -->
        <form id="playlistForm" style="display: none;">
            <label for="playlist-name">Playlist Name:</label>
            <input type="text" id="playlist-name" name="playlist-name" required>

            <label for="song-selection">Select Song:</label>
            <select id="song-selection" name="song-selection" required>
                <option value="" disabled selected>Select a song</option>
                <option value="song1">Song Title 1 - Artist 1</option>
                <option value="song2">Song Title 2 - Artist 2</option>
                <!-- Add more song options as needed -->
            </select>

            <a href="#" class="link-button" id="savePlaylistButton">Save</a>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Terms</a></p>
    </footer>

 
</body>
</html>