# README

Nice little setup to create random semi-opaque colored squares in a <div>.

## The Container

This is the container the <div> that the random boxes get put into lives in.

```css
.container {
    background-color: gold;
    position: relative;
    height: 95vh;
}
```

## Background

This is the <div> the random boxes get placed into

```css
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
```

## Box

This is what styles the opacity and border radius for the boxes

```css
.box {
      position: absolute;
      opacity: 0.4;
      border-radius: 10px;
    }
```

## The HTML Structure

```html
<html>
<head>
</head>
<body class="container">
  <div class="bg">
  </div>
</body>
</html>
```

## Javascript

There are two script tags.  They should likely go in the HTML just before </body> so they don't interrupt the loading of the page.

You can edit the RGB color codes you want the script to use for the colors of the boxes.

I'll probably try to move the colors to CSS somewhere so it's a little easier to deal with.  Fewer places to edit shit and all that.  Maybe use CSS variables so it's easier to pick site colors.

```js
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
```

**This is the one that creates the boxes**

Here you can pick how many boxes you want generated and change the class of the div you target.

```js
  <script>
    generateBoxes(15, document.querySelector(".bg"));
  </script>
```
