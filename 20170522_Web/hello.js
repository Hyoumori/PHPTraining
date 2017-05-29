var p = 0;

function setup() {
  var w = window.innerWidth;
  var h = window.innerHeight;
  createCanvas(w, h);
}

function percent() {
  if (p < 1) {
    p += .1;
  } else {
    p = 0;
  }
  return p;
};

function draw() {
  if (mouseIsPressed) {
    fill(0);
  } else {
    fill(255);
  }
  var w = window.innerWidth / 2;
  var h = window.innerHeight / 2;

  var from = color(255, 0, 0, 0.2 * 255);
  var to = color(0, 0, 255, 0.2 * 255);
  var amt = percent();
  var c = lerpColor(from, to, amt);

  noFill();
  stroke(c);
  triangle(mouseX, mouseY, w, h, 300, 310);
  stroke(from);
  triangle(mouseX, mouseY, 100, 100, 100, 100);
}

function mousePressed() {
  clear();
}
