//background
var canvas = document.getElementById("background"),
    context = canvas.getContext("2d"),
    img = new Image();

img.src="../../pixel_art/website-background.png";

img.onload = function()
{
    // create pattern
    var ptrn = context.createPattern(img, 'repeat'); // Create a pattern with this image, and set it to "repeat".
    context.fillStyle = ptrn;
    context.fillRect(0, 0, canvas.width, canvas.height); // context.fillRect(x, y, width, height);
}

//demo soon scroll
var ctx = document.getElementById('demo-soon_scroll').getContext('2d');
// load image
var image = new Image();
image.src="../../pixel_art/demo-soon_scroll.png";
image.onload = function ()
{
    // draw the image into the canvas
    ctx.drawImage(image, 0, 0);
}