// let a = 1;
// let tekstas = 'Kintamojo a reiksme: ';

// console.log(tekstas + a);
//=======================================================================



//Kampu suma uzduotis
//=======================================================================
let atsEl = document.getElementById('ats');
let n1 = 3;
let n2 = 4;

// console.log(atsEl);

function rastiKampuSuma(n1, n2) {
  let s1 = (n1 - 2) * 180;
  let s2 = (n2 - 2) * 180;
  atsEl.innerHTML = 'S1: ' + s1 + '<br>';
  atsEl.innerHTML += 'S2: ' + s2 + '<br>';
  atsEl.innerHTML += 'Bendra kampu suma: ' + (s1 + s2);
}

rastiKampuSuma(n1, n2);
//=======================================================================


// === JavaScript 1 dalis ===
//=======================================================================
// 1.

// let metai = 1986 % 10;
// let menuo = 08 % 10;
// let diena = 14 % 10;
// let suma;


// suma = metai + menuo + diena;
// console.log(suma);


// let metai2 = '1986';
// let menuo2 = '08';
// let diena2 = '14';
// let suma2;

// suma2 = (metai2[metai2.length-1]*1) + (menuo2[menuo2.length-1]*1) + (diena2[diena2.length-1]*1);

// console.log(suma2);


// let gimimoData = [1986, 08, 14];
// let suma3 = gimimoData.map((x) => x%10).reduce((suma, n) => suma + n,0)

// console.log(suma3);
//=======================================================================


// 2.
//=======================================================================
// let r = Number(prompt('Apskritimo spindulys (r): '));

// let c = 2 * Math.PI * r;
// let s = Math.PI * r ** 2;

let ilgisPlotas = function () {
  let r = document.getElementById('spindulys').value;
  let ilgis = 2 * Math.PI * r;
  let plotas = Math.PI * r ** 2;
  return `Apskritimo ilgis: ${ilgis} <br> Plotas: ${plotas}`;
  // alert(`Apskritimo ilgis: ${ilgis} ir plotas: ${plotas}`);
};

let btn = document.querySelector('.apskritimas-btn');
let atsakymas = document.querySelector('.ats');

btn.addEventListener('click', function () {
  atsakymas.innerHTML = ilgisPlotas();
})
//=======================================================================


// === JavaScript 2 dalis ===
//=======================================================================

// 0.


let a = -5;
let b = 0;
let c = -4;
let d = 4;
let x;
let y;

if (a > b || c > d) {
  document.getElementById('intervalu-ats').innerHTML = 'Sankirta neegzistuoja';
}

if (a >= c && a <= d) {
  x = a;
} else if (a <= c && c <= b) {
  x = c;
}

if (a <= d && d <= b) {
  y = d;
} else if (c <= b && b <= d) {
  y = b;
}

document.getElementById('intervalu-ats').innerHTML = `x: ${x}, y: ${y}`;


// 1.
// let vardas = 'Tomas';
// let pavarde = 'Tomauskas';
// let kursas = 4;
// let kurMokosi = 'KTU';
// let pazymiai =  [7,4,5];


// 2.
// let sakinys = `${vardas} ${pavarde} mokosi ${kurMokosi}, ${kursas} kurse, jo pazymiai: [${pazymiai}]`;

// console.log(sakinys);

// 3.

// console.log("vardas yra: " + typeof vardas);
// console.log("kursas yra: " + typeof kursas);
// console.log("pazymiai yra: " + typeof pazymiai);

// 4.

let studentas = {
  vardas: 'Tomas',
  pavarde: 'Tomauskas',
  kursas: 4,
  kurMokosi: 'KTU',
  pazymiai: [7, 4, 5, 10, 9, 10, 3, 6],
  pazymiuVidurkis: function (pazymiai) {
    let vidurkis = 0;
    for (let i = 0; i < pazymiai.length; i++) {
      vidurkis += pazymiai[i];
    }
    return vidurkis / pazymiai.length;
  },
};


// 5.

// let studentasArr = [{ vardas: 'Tomas' }, { pavarde: 'Tomauskas' }, { kursas: 4 }, { kurMokosi: 'KTU' }, { pazymiai: [7, 4, 5, 6, 7, 10, 3] }];

// console.log(studentasArr);

// 6.

// console.log(studentasArr[4]);
// console.log(studentasArr[4]['pazymiai'][0]);

// 7.

// let sakinys2 = studentas.vardas + " " + studentas.pavarde + " mokosi " + studentas.kurMokosi +  ", " + studentas.kursas + ' kurse' + ", " + "jo pazymiai: " + "[" + studentas.pazymiai + "], ir pazymiu vidurkis: " + studentas.pazymiuVidurkis(studentas.pazymiai);

// let sakinys3 = studentas['vardas'] + " " + studentas['pavarde'] + " mokosi " + studentas['kurMokosi'] +  ", " + studentas['kursas'] + ' kurse' + ", " + "jo pazymiai: " + "[" + studentas['pazymiai'] + "], ir pazymiu vidurkis: " + studentas['pazymiuVidurkis'](studentas.pazymiai);

// console.log(sakinys2);
// console.log(sakinys3);

// 8.

// for(let i = 0; i < studentas.pazymiai.length; i++ ) {
//   console.log(studentas.pazymiai[i]);
// };

// 9. - 10.

// let suma = 0;

// for (let i = 0; i < 3; i++) {
//   let randomNum = Math.floor(Math.random() * studentas.pazymiai.length);
//   if (studentas.pazymiai[randomNum] < 10) {
//     console.log(studentas.pazymiai[randomNum] + 1);
//     suma += (studentas.pazymiai[randomNum] + 1);
//   } else {
//     console.log(studentas.pazymiai[randomNum]);
//     suma += studentas.pazymiai[randomNum];
//   }
// };

// console.log(`Triju pazymiu suma: ${suma}`);


// 11.

// let a = studentasArr[4].pazymiai[3];
// let b = studentasArr[4].pazymiai[5];
// let sandauga = a * b;

// console.log(sandauga);

//12.

// console.log(studentas.kursas !== isNaN);
// console.log(typeof studentas.kursas === 'number');


// 13. 

// console.log(studentas.kursas === 4 && Number.isInteger(studentas.kursas));


// 14.



// 15.

let A = [1, 3, 6, 5, 7, 2, 2, 4, 4, 8];
let rodytiAts = document.getElementById('odd-even-ats');

function sudeti(A, B) {
  let odd = 0;
  let even = 0;
  for (let i = 0; i < A.length; i++) {
    if (A[i] % 2 === 0) {
      even += A[i];
    }
    if (A[i] % 2 !== 0) {
      odd += A[i];
    }
  }
  if (B === 'odd') {
    rodytiAts.innerHTML = odd;
  }
  if (B === 'even') {
    rodytiAts.innerHTML = even;
  }
  if (B === 'abu') {
    rodytiAts.innerHTML = even + odd;
  }
}

// 15.1

function sudetiIndex(A) {
  let odd = 0;
  let even = 0;
  for (let i = 0; i < A.length; i++) {
    if (A[i] % 2 === 0) {
      even += A.indexOf(A[i]);
    }
    if (A[i] % 2 !== 0) {
      odd += A.indexOf(A[i]);
    }
  }
  console.log(even);
  console.log(odd);
}

sudetiIndex(A);


// 15.2

function skaiciuGen(ilgis) {
  let skaiciai = [];
  for (let i = 0; i < ilgis; i++) {
    skaiciai.push(Math.floor(Math.random() * 100));
  }
  console.log(skaiciai);
  return skaiciai;
}
skaiciuGen(7);


// 15.3

function raidziuGen(n) {
  let raides = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  let atsitiktines =[];
  let ilgisMasyvo = skaiciuGen(n);
  for (let i = 0; i < ilgisMasyvo.length; i++) {
    atsitiktines.push(raides[Math.floor(Math.random()*raides.length)]);
  }
  console.log(atsitiktines);
}
raidziuGen(10);


//=======================================================================
//Funkciju Uzduotis (is skaidriu)

// 1 uzduotis
function sudetis(a, b) {
  return a + b;
}

function atimtis(a, b) {
  return a - b;
}

function dalyba(a, b) {
  return a / b;
}

function daugyba(a, b) {
  return a * b;
}

// 2 - 3 uzduotis

function fn() {
  let rezultatai = document.getElementById('rezultatai');
  // console.log(rezultatai);

  for (let a = 1; a <= 5; a++) {
    for (let b = 1; b <= 20; b += 2) {
      rezultatai.innerHTML += `<mark>Ciklas ${a} - ${b}:</mark> <br>`;
      rezultatai.innerHTML += `Sudetis: ${sudetis(a, b)} <br>`;
      rezultatai.innerHTML += `Atimtis: ${atimtis(a, b)} <br>`;
      rezultatai.innerHTML += `Dalyba: ${dalyba(a, b)} <br>`;
      rezultatai.innerHTML += `Daugyba: ${daugyba(a, b)} <br><br>`;
    }
  }
}
//=======================================================================



//Tab uzduotis

