<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-size: 16px; /* Default font size for the body */
    }

    h1 {
      font-size: 4vw; /* Responsive font size using viewport units */
      text-align: center;
    }

    p {
      font-size: 2vw; /* Responsive font size for paragraphs */
    }

    /* Media query for larger screens */
    @media screen and (min-width: 768px) {
      h1 {
        font-size: 3vw;
      }

      p {
        font-size: 1.5vw;
      }
    }
  </style>
</head>
<body>

  <h1>Responsive Text Example</h1>

  <p>This is an example of responsive text. The font size will adjust based on the screen size.</p>

</body>
</html>
