<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bs/bootstrap.min.css" rel="stylesheet">
    <title>Tic-Tac-Toe</title>
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon">
    <link rel="icon" href="/logo.ico" type="image/x-icon">
    <style>
      .kotak{
        height: 100px;
        width: 100px;
      }
      .silang{
        background-image: url(/pic/x.png);
        background-size: 60px;
        background-repeat: no-repeat;
        background-position: center;
      }
      .bunder{
        background-image: url(/pic/o.png);
        background-size: 60px;
        background-repeat: no-repeat;
        background-position: center;
      }
    </style>
  </head>
  <body class="bg-dark">
    <div class="pt-5 mt-5">
      <div class="d-flex justify-content-center">
        <div id="kotak1" onclick="klik(this.id)" class="border-5 border-bottom border-end kotak">

        </div>
        <div id="kotak2" onclick="klik(this.id)" class="border-5 border-bottom border-end kotak">

        </div>
        <div id="kotak3" onclick="klik(this.id)" class="border-5 border-bottom kotak">

        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div id="kotak4" onclick="klik(this.id)" class="border-5 border-bottom border-end kotak">

        </div>
        <div id="kotak5" onclick="klik(this.id)" class="border-5 border-bottom border-end kotak">

        </div>
        <div id="kotak6" onclick="klik(this.id)" class="border-5 border-bottom kotak">

        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div id="kotak7" onclick="klik(this.id)" class="border-5 border-end kotak">

        </div>
        <div id="kotak8" onclick="klik(this.id)" class="border-5 border-end kotak">

        </div>
        <div id="kotak9" onclick="klik(this.id)" class="border-5 kotak">

        </div>
      </div>
    </div>

    <div id="statusx" class="h1 text-white mt-5 text-center"></div>

    <script src="/bs/bootstrap.bundle.min.js"></script>

    <script>
      let list_a = ['kotak1','kotak2','kotak3','kotak4','kotak5','kotak6','kotak7','kotak8','kotak9']
      let list_b = [];//removed
      let list_x = [];
      let list_bunder = [];

      function klik(x) {
        let a = list_x.indexOf(x);
        if (a == -1) {
          list_x.push(x);
          document.getElementById(x).className = document.getElementById(x).className + ' silang';

          for (let i = 0; i < list_a.length; i++) {
            if (list_a[i] == x) {
              list_b.push(list_a[i]);
              list_a.splice(i, 1);
            }
          }
          cek();
          gen_bunder();
        }
      }

      function gen_bunder() {
        if (list_a.length < 2) {
          cek();
        }
        else if (list_x.length > 1) {
          // kombinasi I2 (2,5,8)
          if (list_x.indexOf('kotak2')!=-1 && list_x.indexOf('kotak5')!=-1 && list_a.indexOf('kotak8')!=-1) {
            pilih('kotak8');
          }
          else if (list_x.indexOf('kotak2')!=-1 && list_x.indexOf('kotak8')!=-1 && list_a.indexOf('kotak5')!=-1) {
            pilih('kotak5');
          }
          else if (list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak8')!=-1 && list_a.indexOf('kotak2')!=-1) {
            pilih('kotak2');
          }


          // kombinasi I1 (1,4,7)
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak4')!=-1 && list_a.indexOf('kotak7')!=-1) {
            pilih('kotak7');
          }
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak7')!=-1 && list_a.indexOf('kotak4')!=-1) {
            pilih('kotak4');
          }
          else if (list_x.indexOf('kotak4')!=-1 && list_x.indexOf('kotak7')!=-1 && list_a.indexOf('kotak1')!=-1) {
            pilih('kotak1');
          }


          // kombinasi I3 (3,6,9)
          else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak6')!=-1 && list_a.indexOf('kotak9')!=-1) {
            pilih('kotak9');
          }
          else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak6')!=-1) {
            pilih('kotak6');
          }
          else if (list_x.indexOf('kotak6')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak3')!=-1) {
            pilih('kotak3');
          }


          // kombinasi -1 (1,2,3)
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak2')!=-1 && list_a.indexOf('kotak3')!=-1) {
            pilih('kotak3');
          }
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak3')!=-1 && list_a.indexOf('kotak2')!=-1) {
            pilih('kotak2');
          }
          else if (list_x.indexOf('kotak2')!=-1 && list_x.indexOf('kotak3')!=-1 && list_a.indexOf('kotak1')!=-1) {
            pilih('kotak1');
          }


          // kombinasi -2 (4,5,6)
          else if (list_x.indexOf('kotak4')!=-1 && list_x.indexOf('kotak5')!=-1 && list_a.indexOf('kotak6')!=-1) {
            pilih('kotak6');
          }
          else if (list_x.indexOf('kotak4')!=-1 && list_x.indexOf('kotak6')!=-1 && list_a.indexOf('kotak5')!=-1) {
            pilih('kotak5');
          }
          else if (list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak6')!=-1 && list_a.indexOf('kotak4')!=-1) {
            pilih('kotak4');
          }


          // kombinasi -3 (7,8,9)
          else if (list_x.indexOf('kotak7')!=-1 && list_x.indexOf('kotak8')!=-1 && list_a.indexOf('kotak9')!=-1) {
            pilih('kotak9');
          }
          else if (list_x.indexOf('kotak7')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak8')!=-1) {
            pilih('kotak8');
          }
          else if (list_x.indexOf('kotak8')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak7')!=-1) {
            pilih('kotak7');
          }


          // kombinasi / (3,5,7)
          else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak5')!=-1 && list_a.indexOf('kotak7')!=-1) {
            pilih('kotak7');
          }
          else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak7')!=-1 && list_a.indexOf('kotak5')!=-1) {
            pilih('kotak5');
          }
          else if (list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak7')!=-1 && list_a.indexOf('kotak3')!=-1) {
            pilih('kotak3');
          }


          // kombinasi \ (1,5,9)
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak5')!=-1 && list_a.indexOf('kotak9')!=-1) {
            pilih('kotak7');
          }
          else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak5')!=-1) {
            pilih('kotak5');
          }
          else if (list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak9')!=-1 && list_a.indexOf('kotak1')!=-1) {
            pilih('kotak1');
          }


          else {
            randomx();
          }
        }
        else {
          randomx();
        }
      }


      function pilih(x) {
        document.getElementById(x).className = document.getElementById(x).className + ' bunder';

        for (let i = 0; i < list_a.length; i++) {
          if (list_a[i] == x) {
            list_b.push(list_a[i]);
            list_a.splice(i, 1);
          }
        }
      }


      function randomx() {
        let a = list_a.length;
        let b = Math.floor(Math.random() * a);
        let c = list_a[b];
        document.getElementById(c).className = document.getElementById(c).className + ' bunder';

        for (let i = 0; i < list_a.length; i++) {
          if (list_a[i] == c) {
            list_b.push(list_a[i]);
            list_a.splice(i, 1);
          }
        }
      }


      function cek() {
        // kombinasi I1 (1,4,7)
        if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak4')!=-1 && list_x.indexOf('kotak7')!=-1) {
          winx();
        }
        // kombinasi I2 (2,5,8)
        else if (list_x.indexOf('kotak2')!=-1 && list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak8')!=-1) {
          winx();
        }
        // kombinasi I3 (3,6,9)
        else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak6')!=-1 && list_x.indexOf('kotak9')!=-1) {
          winx();
        }


        // kombinasi -1 (1,2,3)
        else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak2')!=-1 && list_x.indexOf('kotak3')!=-1) {
          winx();
        }
        // kombinasi -2 (4,5,6)
        else if (list_x.indexOf('kotak4')!=-1 && list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak6')!=-1) {
          winx();
        }
        // kombinasi -3 (7,8,9)
        else if (list_x.indexOf('kotak7')!=-1 && list_x.indexOf('kotak8')!=-1 && list_x.indexOf('kotak9')!=-1) {
          winx();
        }


        // kombinasi / (3,5,7)
        else if (list_x.indexOf('kotak3')!=-1 && list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak7')!=-1) {
          winx();
        }
        // kombinasi \ (1,5,9)
        else if (list_x.indexOf('kotak1')!=-1 && list_x.indexOf('kotak5')!=-1 && list_x.indexOf('kotak9')!=-1) {
          winx();
        }

      }


      function winx() {
        statusx.innerHTML = 'Win';
      }
    </script>
  </body>
</html>
