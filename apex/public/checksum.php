<?php

  require_once('../private/initialize.php');

  $message = '';
  $result_checksum = '';
  $checksum_algorithm = (isset($_POST['checksum_algorithm']))?
                          $_POST['checksum_algorithm'] : "CRC32";

  if(isset($_POST['submit'])) {
      // This is a create signature request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      if ($message != null){
        switch($checksum_algorithm){
          case "CRC32":
            $result_checksum = crc32($message);
            break;
          case "MD5":
            $result_checksum = md5($message);
            break;
          case "SHA1":
            $result_checksum = sha1($message);
            break;
          default:
            $result_checksum = $message;
            break;
        }
      }
  }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Asymmetric Encryption: Create/Verify Signature</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Checksum</h1>

    <div id="encoder">
      <h2>Create/Verify Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="encode_algorithm">Algorithm</label>
          <select name="checksum_algorithm">
            <option value="CRC32">CRC32</option>
            <option value="MD5"
                <?php if($checksum_algorithm == "MD5")
                          echo "selected= true";
                ?>> MD5
            </option>
            <option value="SHA1"
                <?php if($checksum_algorithm == "SHA1")
                          echo "selected= true";
                ?>> SHA1
            </option>
          </select>
        </div>
        <div>
          <label for="message">Checksum</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>

        <div>
          <input type="submit" name="submit" value="Enter">
        </div>
      </form>

      <div class="result"><?php echo h($result_checksum); ?></div>
      <div style="clear:both;"></div>
    </div>

    <hr />

  </body>
</html>
