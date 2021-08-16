<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="visible-print text-center">
    <h1> Laravel QR Code Generator Example </h1>            
  </div>
  <table>
    <tr>
      <td>
        No
      </td>
      <td>
        QR Code
      </td>
    </tr>
    <tr>
      <td>
        {{$loop->iteration}}
      </td>
      <td>
        <img src="{{ asset('storage/' . ) }}" alt="">
      </td>
    </tr>
  </table>
</body>
</html>