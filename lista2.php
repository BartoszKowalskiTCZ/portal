<head>
  <meta charset="utf-8">
  <title>Lista przyjaciół</title>
  <link rel="stylesheet" href="styl.css">
</head>
<body>
  <div class="banner">
    <h1>Portal Społecznościowy - moje konto</h1>
  </div>
  <main>
    <h2>Moje zainteresowania</h2>
    <ul>
      <li>muzyka</li>
      <li>film</li>
      <li>komputery</li>
    </ul>
    <h2>Moi znajomi</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "portal");
  $sql = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<section>';
    echo '<div class="zdjecie"><img src="' . $row['zdjecie'] . '" alt="przyjaciel"></div>';
    echo '<div class="opis"><h3>' . $row['imie'] . ' ' . $row['nazwisko'] . '</h3><p>Ostatni wpis: ' . $row['opis'] . '</p></div>';
    echo '<hr class="linia">';
    echo '</section>';
  }
} else {
  echo "Brak wyników";
}
$conn->close();
?>
    </main>
      <footer>
    <div class="one">
      Stronę wykonał: bartosz kowalski
    </div>
    <div class="two">
      <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </div>
  </footer>
</body>
</html>
