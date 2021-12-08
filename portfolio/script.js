// let a = 1;
// let tekstas = 'Kintamojo a reiksme: ';

// console.log(tekstas + a);





// === JavaScript 1 dalis ===

// 1.


// let metai = 1986 % 10;
// let menuo = 08 % 10;
// let diena = 14 % 10;
// let suma;


// suma = metai + menuo + diena;
// console.log(suma);


// let metai = '1986';
// let menuo = '08';
// let diena = '14';
// let suma;

// suma = (metai[metai.length-1]*1) + (menuo[menuo.length-1]*1) + (diena[diena.length-1]*1);

// console.log(suma);


// let gimimoData = [1986, 08, 14];
// let suma = gimimoData.map((x) => x%10).reduce((suma, n) => suma + n)

// console.log(suma);


// 2.

// let r = Number(prompt('Apskritimo spindulys (r): '));
// let c = 2 * Math.PI * r;
// let s = Math.PI * r**2
// console.log(s, c);

// const ilgisPlotas = function(r) {
//   let ilgis = 2 * Math.PI * r;
//   let plotas = Math.PI * r**2;
//   console.log(`Apskritimo ilgis: ${ilgis} ir plotas: ${plotas}`);
//   alert(`Apskritimo ilgis: ${ilgis} ir plotas: ${plotas}`);
// };

// ilgisPlotas(r);


// === JavaScript 2 dalis ===


// 0.

// let intervalai = [[-5,0], [-4,4]];
// let x;
// let y;
// let ats = [];

// if(intervalai[0][0] < intervalai[1][0] && intervalai[0][1] < intervalai[1][1]) {
//   x = Math.max(intervalai[0][0], intervalai[0][1]);
//   y = Math.min(intervalai[1][0], intervalai[1][1]);
//   ats.push(x,y);
// } 
// console.log(ats);


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
  pazymiuVidurkis: function(pazymiai) {
    let vidurkis = 0;
    for(let i = 0; i < pazymiai.length; i++) {
      vidurkis+=pazymiai[i];
    }
    return vidurkis / pazymiai.length;
  },
};


// 5.

let studentasArr = [{vardas: 'Tomas'}, {pavarde: 'Tomauskas'}, {kursas: 4}, {kurMokosi: 'KTU'}, {pazymiai: [7,4,5,6,7,10,3]}];

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

let suma = 0;

for(let i = 0; i < 3; i++) {
  let randomNum = Math.floor(Math.random()*studentas.pazymiai.length);
  if(studentas.pazymiai[randomNum] < 10) {
    console.log(studentas.pazymiai[randomNum] + 1);
    suma += (studentas.pazymiai[randomNum] + 1);
  } else {
    console.log(studentas.pazymiai[randomNum]);
    suma += studentas.pazymiai[randomNum];
  }
};

console.log(`Triju pazymiu suma: ${suma}`);


// 11.

let a = studentasArr[4].pazymiai[3];
let b = studentasArr[4].pazymiai[5];
let sandauga = a * b;

console.log(sandauga);