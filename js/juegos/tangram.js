
window.onload = cambiarImagen;
function cambiarImagen() {
    var imagenes = ["img/juegos/CAMEL@3x.png", "img/juegos/BEAR@3x.png", "img/juegos/CAT@3x.png", "img/juegos/COW@3x.png", "img/juegos/CRAB@3x.png", "img/juegos/DOG@3x.png", "img/juegos/ELEPHANT@3x.png", "img/juegos/FOX@3x.png", "img/juegos/FROG@3x.png", "img/juegos/HORSE@3x.png", "img/juegos/KANGAROO@3x.png", "img/juegos/LION@3x.png", "img/juegos/PANDA@3x.png", "img/juegos/SEAL@3x.png", "img/juegos/TURTLE@3x.png", "img/juegos/WHALE@3x.png"];
    var imagen = document.getElementById("imagTangram");
    var indice = Math.floor(Math.random() * imagenes.length);
    imagen.src = imagenes[indice];
}

const body = document.body;
const container = document.querySelector(".container");
const pl = document.querySelector(".canvas.p");
const tl1 = document.querySelector(".canvas.t-l-1");
const tl2 = document.querySelector(".canvas.t-l-2");
const ts1 = document.querySelector(".canvas.t-s-1");
const ts2 = document.querySelector(".canvas.t-s-2");
const sq = document.querySelector(".canvas.s");
const tm = document.querySelector(".canvas.t-m");

// degree state closure
const rotationIncrementor = function () {
  let rotation = 0;

  function updateRotation() {
    rotation = rotation + 45 < 360 ? rotation + 45 : 0;
  }

  return {
    rotate: function () {
      updateRotation();
    },
    getDegree: function () {
      return rotation;
    } };

};

// initialise state for each shape
let plRotator = rotationIncrementor();
let tl1Rotator = rotationIncrementor();
let tl2Rotator = rotationIncrementor();
let ts1Rotator = rotationIncrementor();
let ts2Rotator = rotationIncrementor();
let sqRotator = rotationIncrementor();
let tmRotator = rotationIncrementor();

var checkbox = document.getElementById("miCheckbox");
// click on shape makes rotation
pl.ondblclick = function () {
  plRotator.rotate();
  
  if (checkbox.checked) {
    pl.style.transform = `rotate(${plRotator.getDegree()}deg) scaleX(-1)`;
  }else{
    pl.style.transform = `rotate(${plRotator.getDegree()}deg)`;
    return;
  }

};
tl1.ondblclick = function () {
  tl1Rotator.rotate();
  
  if (checkbox.checked) {
    tl1.style.transform = `rotate(${tl1Rotator.getDegree()}deg) scaleX(-1)`;
  }else{
    tl1.style.transform = `rotate(${tl1Rotator.getDegree()}deg)`;
    return;
  }

};
tl2.ondblclick = function () {
  tl2Rotator.rotate();

  if (checkbox.checked) {
    tl2.style.transform = `rotate(${tl2Rotator.getDegree()}deg) scaleX(-1)`;
  }else{
    tl2.style.transform = `rotate(${tl2Rotator.getDegree()}deg)`;
    return;
  }

};
ts1.ondblclick = function () {
  ts1Rotator.rotate();

  if (checkbox.checked) {
    ts1.style.transform = `rotate(${ts1Rotator.getDegree()}deg) scaleX(-1)`;
  }else{
    ts1.style.transform = `rotate(${ts1Rotator.getDegree()}deg)`;
    return;
  }

};
ts2.ondblclick = function () {
  ts2Rotator.rotate();

  if (checkbox.checked) {
    ts2.style.transform = `rotate(${ts2Rotator.getDegree()}deg) scaleX(-1)`;
  }else{
    ts2.style.transform = `rotate(${ts2Rotator.getDegree()}deg)`;
    return;
  }

};
tl1.ondblclick = function () {
  tl1Rotator.rotate();

  if (checkbox.checked) {
    tl1.style.transform = `rotate(${tl1Rotator.getDegree()}deg) scaleX(-1)`;
  }else{
    tl1.style.transform = `rotate(${tl1Rotator.getDegree()}deg)`;
    return;
  }

};
sq.ondblclick = function () {
  sqRotator.rotate();

  if (checkbox.checked) {
    sq.style.transform = `rotate(${sqRotator.getDegree()}deg) scaleX(-1)`;
  }else{
    sq.style.transform = `rotate(${sqRotator.getDegree()}deg)`;
    return;
  }

};
tm.ondblclick = function () {
  tmRotator.rotate();

  if (checkbox.checked) {
    tm.style.transform = `rotate(${tmRotator.getDegree()}deg) scaleX(-1)`;
  }else{
    tm.style.transform = `rotate(${tmRotator.getDegree()}deg)`;
    return;
  }

};

//initialise displacejs with shapes
let displacejsOptions = {
  constrain: true,
  relativeTo: body,
  onMouseDown: dragActive,
  onTouchStart: dragActive,
  onMouseUp: dragInactive,
  onTouchStop: dragInactive };


function dragActive(el) {
  el.className += ' active';
}
function dragInactive(el) {
  el.className = el.className.replace('active', '');
}

window.displacejs(tl1, displacejsOptions);
window.displacejs(tl2, displacejsOptions);
window.displacejs(ts1, displacejsOptions);
window.displacejs(ts2, displacejsOptions);
window.displacejs(pl, displacejsOptions);
window.displacejs(sq, displacejsOptions);
window.displacejs(tm, displacejsOptions);