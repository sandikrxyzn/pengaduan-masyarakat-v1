<?php

// class Database {
//   private $host = "localhost";
//   private $db_name = "pengaduan_masyarakatt";
//   private $username = "root";
//   private $password = "";
//   public $conn;

//   // Membuat koneksi
//   public function getConnection() {
//       $this->conn = null;
//       try {
//           $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
//       } catch(PDOException $exception) {
//           echo "Koneksi error: " . $exception->getMessage();
//       }
//       return $this->conn;
//   }
// }


// ! konekasi database
$conn = mysqli_connect("sandikrxyzn.com", "root", "", "pengaduan_masyarakatt");



$listUser = query("SELECT * FROM masyarakat");
$listPengaduan = query("SELECT * FROM pengaduan");

// ! Tampilkan Database
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


// ! Registrasi AKun Untuk Masyarakat
function registrasi($data)
{
  global $conn;

  $nik = strtolower(stripcslashes($data['nik']));
  $nama = strtolower(stripcslashes($data['nama']));
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password_1 = mysqli_real_escape_string($conn, $data['password_1']);
  $telp = strtolower(stripcslashes($data['telp']));

  // Cek username sama
  $result = mysqli_query($conn, "SELECT username FROM masyarakat WHERE username= '$username'");

  // bila usernam sama
  if (mysqli_fetch_assoc($result)) {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Username sudah digunakan
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>";
    return false;
  }

  // cek kesesuain password
  if ($password !== $password_1) {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Password Berbeda
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>";

    return false;
  }

  // hash password
  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO masyarakat VALUES('$nik', '$nama', '$username','$password', '$telp')");

  return mysqli_affected_rows($conn);
}


// ! registrasi admin
function registrasiAdmin($data)
{
  global $conn;
  $nama = strtolower(stripcslashes($data['nama']));
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password_1 = mysqli_real_escape_string($conn, $data['password_1']);
  $telp = strtolower(stripcslashes($data['telp']));
  $level = "admin";

  // Cek username sama
  $result = mysqli_query($conn, "SELECT username FROM petugas WHERE username= '$username'");


  if (mysqli_fetch_assoc($result)) {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Username sudah digunakan
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>";

    return false;
  }

  // cek kesesuain password
  if ($password !== $password_1) {
    echo "<div class='alert alert-secondary alert-dismissible' role='alert'>
        Password Berbeda
        <button type='button' class='btn-close' data-bs-dismiss='alert' ariana-label='Close'></button>
        </div>";

    return false;
  }

  // hash password
  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO petugas VALUES('', '$nama', '$username','$password', '$telp', '$level')");

  return mysqli_affected_rows($conn);
}

// ! upload gambar / file
function upload()
{

  $nameFile = $_FILES['foto']['name'];
  $sizeFile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmpName = $_FILES['foto']['tmp_name'];

  // cek apakah gambar yang upload sesuai
  if ($error === 4) {
    echo "<script>alert('Plih Gambar');
    document.location.href = 'pengaduan';  
    </script>";
    return false;
  }

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $nameFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>alert('Upload Gambar Bukan yang lain');
    document.location.href = 'pengaduan';     
    </script>";
    return false;
  }

  if ($sizeFile > 1000000) {
    echo "<script>alert('Ukuran File Terlalu Besar');
    document.location.href = 'pengaduan';      
    </script>";
    return false;
  }


  // Lolos Pengecekan

  // buat nama baru
  $nameFileBaru = uniqid();
  $nameFileBaru .= '.';
  $nameFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'uploads/images/' . $nameFileBaru);

  return $nameFileBaru;
}


$errors = array();




// Pencarian
function cari($keywoard)
{
  $query = "SELECT * FROM masyarakat
                  WHERE
            username = '$keywoard'";

  return query($query);
}


// mengapus Data
function hapusPengaduan($id)
{
  global $conn;
  $stmt = mysqli_prepare($conn, "DELETE FROM pengaduan WHERE id_pengaduan = ?");
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  if (mysqli_affected_rows($conn) > 0) {
    echo "berhasil";
  }

  return mysqli_affected_rows($conn);
}




// ! login Masyarakat
$errors = array();

function loginAkunMasyarakat($data)
{
  global $conn, $errors;

  $username = $data['username'] ?? '';
  $password = $data['password'] ?? '';

  if (empty($username)) {
    $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
    Username is required
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    return false;
  }

  if (empty($password)) {
    $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
    Password is required
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    return false;
  }

  $query = "SELECT * FROM masyarakat WHERE username = ?";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, 's', $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
      // set session
      $_SESSION['username'] = $username;
      header("Location: /sandi");
      exit;
    }
  }

  $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
  Invalid username or password
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";

  return false;
}





// ! login Admin & petugas
function loginAdmin($data)
{
  global $conn, $errors;
  $username = $data['username'];
  $password = $data['password'];

  if (empty($username)) {
    $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
    Username is required
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    return false;
  }

  if (empty($password)) {
    $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
    Password is required
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    return false;
  }


  $result = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' ");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

      $level = ($row['level'] == "admin") ? "admin" : "petugas";
      // set session
      $_SESSION['level'] = $level;
      $_SESSION['nama'] = $row['nama'];
      $_SESSION['username'] = $username;

      header("Location: /sandi/" . $level);
    }
  }

  $errors[] = "<div class='alert alert-danger alert-dismissible' role='alert'>
  Invalid username or password
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";

  return false;
}


// ! ubah profile
function ubahProfile($data)
{
  global $conn;
  $nik = $data['nik'];
  // menghindari xss
  $nama = strtolower(stripcslashes($data['nama']));
  $telp = strtolower(stripcslashes($data['telp']));

  // Cek username sama
  mysqli_query($conn, "UPDATE masyarakat SET nama = '$nama', telp = '$telp' WHERE nik = '$nik'");

  return mysqli_affected_rows($conn);
}


/*

 * verifikasiLaporan() is a function that updates the status of a report in the database.
 * 
 * Parameters: 
 *  $data - An associative array containing the id of the report and its status.
 * 
 * Variables: 
 *  $id - The id of the report.
 *  $status - The status of the report, converted into a string.
 *  $conn - The connection to the database.
 *  
 * Returns: 
 * The number of rows affected by the query.


 **/
function verifikasiLaporan($data)
{
  global $conn;
  $id = $data['ok'];
  $status = implode(',', $data['status']);

  mysqli_query($conn, "UPDATE pengaduan SET status = '$status' WHERE id_pengaduan = '$id' ");

  return mysqli_affected_rows($conn);
}
