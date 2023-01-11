<!doctype html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style>
    body {
      background: #fafafa;
    }

    .container {
      background-color: gold;
      position: relative;
      height: 95vh;
    }

    .bg {
      top: 0;
      left: 0;
      z-index: -1;
      position: absolute;
      height: 100%;
      width: 100%;
      overflow: hidden;
      display: flex;
      flex-wrap: wrap;
    }

    .box {
      position: absolute;
      opacity: 0.4;
      border-radius: 10px;
    }
  </style>
</head>

<body class="container">
  <div class="bg">
  </div>
  <script>
    const generateBoxes = (limit, parent) => {
      parent.innerHTML = "";
      // override colors here
      const colors = [
        "#577590",
        "#43aa8b",
        "#90be6d",
        "#f9c74f",
        "#f8961e",
        "#f3722c",
        "#f94144"
      ];
      for (i = 0; i < limit; i++) {
        let box = document.createElement("div");
        box.classList.add("box");
        box.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        box.style.height = `${Math.floor(Math.random() * 300 + 50)}px`;
        box.style.width = `${Math.floor(Math.random() * 300 + 50)}px`;
        box.style.top = `${Math.floor(Math.random() * 80)}%`;
        box.style.left = `${Math.floor(Math.random() * 80)}%`;
        parent.appendChild(box);
      }
    };
  </script>
  <script>
    generateBoxes(15, document.querySelector(".bg"));
  </script>

</body>

</html>