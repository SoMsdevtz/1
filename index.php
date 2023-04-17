<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send SMS</title>
    <!-- ======= Styles ======= -->
 
    <!-- ======= Bootstrap ======= -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Send SMS</h1>
      


 <form method="POST" action="">
        <div class
="form-group">
<label for="name" class="form-label">Select a name:</label>
<select name="name" id="name" class="form-control" required>
<option value="">-- Select a name --</option>
<?php
         $file = fopen("FILES.csv", "r");
         $headers = fgetcsv($file); // skip the header row
         while (($row = fgetcsv($file)) !== FALSE) {
           echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
         }
         fclose($file);
         ?>
</select>
</div>
<div class="mb-3">
<label for="phone" class="form-label">Phone number:</label>
<input type="tel" name="phone" id="phone" class="form-control" required>
</div>

    <?php
    if(isset($_POST['submit']) && isset($_POST['name'])){
      echo "<div class='form-group'>";
      echo "<label for='selected-name' class='form-label'>Selected name:</label>";
      echo "<input type='text' id='selected-name' class='form-control' value='" . $_POST['name'] . "' disabled>";
      echo "</div>";
      echo "<div class='form-group'>";
      echo "<label for='amount-due' class='form-label'>Amount left:</label>";
      $filename = 'FILES.csv';
      if (($handle = fopen($filename, 'r')) !== false) {
          while (($data = fgetcsv($handle, 1000, ',')) !== false) {
              if ($data[1] === $_POST['name']) {
                  // Found the corresponding row, get the amount
                  $amount = $data[6];
                  echo "<input type='text' id='amount-due' class='form-control' value='Tsh" . $amount . "' disabled>";

                  break;
              }
          }
          fclose($handle);
      }
      echo "</div>";
    }
    ?>
    
    <button type="submit" name="submit" class="btn btn-primary">Send SMS</button>
  </form>
</div>

<!-- ======= Bootstrap ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
  integrity="sha384-REvtCvKoSmT39c6nMn6T63Bl79fdgq3EQjka9XeqdQZi34/VlYwYDsqR47jJEqsd"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
  integrity="sha384-JNQl4QFnX0ZWKqsLGZlMWRm/dmkhS1S+8WjIyexmGFCV7oDzQW5V8lL3MEp5VHu9"
  crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST['submit'])) {
    // Retrieve phone number and name from the form
    $phone = $_POST['phone'];
    $name = $_POST['name'];

    // Open the CSV file and search for the corresponding row
    $filename = 'FILES.csv';
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            if ($data[1] === $name) {
                // Found the corresponding row, get the amount
                $amount = $data[6];

                // Construct the message with the amount and name
         $message = "PEACE AND LOVE SCHOOL inapenda kukukumbusha  Mzazi/mlezi wa $name kuwa deni lililobakia ni Tsh$amount linapaswa kulipwa  kupitia account zetu za shule au wasiliana na mwasibu wa shule .";

                // Check if phone number starts with any of the specified prefixes
                $allowed_prefixes = ['071', '065', '078', '069', '062', '073'];
                $valid_number = false;

                foreach ($allowed_prefixes as $prefix) {
                    if (strpos($phone, $prefix) === 0) {
                        $valid_number = true;
                        break;
                    }
                }

                // If phone number is valid, send SMS using API
                if ($valid_number) {
                    // Send the SMS using the Arkesel API
                    $curl = curl_init();

                    curl_setopt_array($curl, [
                        CURLOPT_URL => 'https://sms.arkesel.com/api/v2/sms/send',
                        CURLOPT_HTTPHEADER => ['api-key: OjFIbnB4TG9DT1Z5cnpxV1Y='],
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => http_build_query([
                            'sender' => 'SoMs',
                            'message' => $message,
                            'recipients' => [$phone],
                        ]),
                    ]);

                    $response = curl_exec($curl);

                    curl_close($curl);

                    // Print the API response
                    echo $response;

                    // Exit the loop
                    break;
                } else {
                    // If phone number is not valid, provide error message with manual contact number
                    echo "Invalid phone number. Please provide a valid phone number that starts with one of the following prefixes: " . implode(", ", $allowed_prefixes) . ". If you need help, please contact us at 0800 123 456.";
                }
            }
        }
    }
}

?>
