<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <title>Document</title>
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: Arial, Helvetica, sans-serif;
      }

      body {
         background: hsl(0, 0%, 86%);
      }

      .container {
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
      }

      .devis {
         width: 750px;
         min-height: 100vh;
         height: max-content;
         background: #ffff;
         padding: 40px 40px;
      }

      .socioteLogo {}

      .devis p {
         margin: 0;
      }

      .title {
         letter-spacing: 2px;
      }

      .logo {}

      .devis img {
         width: 90px;
         height: 70px;
         overflow: hidden;
      }
   </style>
</head>
<body>
   <div class="container">
      <div class="devis">
         <div class="row">
            <div class="col-md-6" style="display: flex;align-items: center;">
               <img src="{{asset('./images/logo/eysi.png')}}" alt="">
            </div>
            <div class="col-md-6">
               <h2 class="title" style="margin-bottom: 0;">Bon de commande</h2>
               <h5 class="num-devise">E00001</h5>
               <div class="mt-4 date">
                  <p>Date de création : 12/03/2023</p>
                  <p>Date d'expiration : juin 4 , 2023</p>
                  <p>Date de livraison : 12/03/2023</p>
               </div>
            </div>
         </div>

         <div class="row mt-3 pt-3">
            <div class="col-md-6">
               <p>Votre Nom / Votre Societe</p>
               <p>Adresse</p>
               <p>Code Postal</p>
               <p>Tele:0616831063</p>
            </div>
            <div class="col-md-6">
               <p>Nom du client</p>
               <p>code postal / ville</p>
               <p>Tele</p>
            </div>
         </div>

         <div class="row mt-4 pt-4">
            <div class="col-md-12">
               <table class="table table-bordered">
                  <thead style="background: #d7d7d7">
                     <tr>
                        <th scope="col">SKU</th>
                        <th scope="col">Description</th>
                        <th scope="col">Qte</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Taxes</th>
                        <th scope="col">Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>e12005</td>
                        <td>desc1</td>
                        <td>2</td>
                        <td>1200</td>
                        <td>0.00</td>
                        <td>2400</td>
                     </tr>
                     <tr>
                        <td>e12005</td>
                        <td>desc1</td>
                        <td>2</td>
                        <td>1200</td>
                        <td>0.00</td>
                        <td>2400</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="row mt-2 pt-2 d-flex justify-content-end">
            <div class="col-md-6">
               <table class="table table-bordered">
                  <tr>
                     <td style="background: #d7d7d7">Quantité totale:</td>
                     <td>20.00 MAD</td>
                  </tr>
                  <tr>
                     <td style="background: #d7d7d7">Sous-totat(MAD):</td>
                     <td>4.00</td>
                  </tr>
                  <tr>
                     <td style="background: #d7d7d7"> t1 (MAD):</td>
                     <td><strong>24.00 MAD</strong></td>
                  </tr>
                  <tr>
                     <td style="background: #d7d7d7"> Total (MAD):</td>
                     <td><strong>24.00 MAD</strong></td>
                  </tr>
               </table>
            </div>
         </div>

      </div>
   </div>
</body>
</html>
