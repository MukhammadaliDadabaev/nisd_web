@extends('admin.layouts.main')

@section('title', 'Admin page')

@section('content')

 <!-- Small boxes (Stat box) -->
 <div class="row">
  <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
          <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
          </div>
          <div class="icon">
              <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
          <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
          </div>
          <div class="icon">
              <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
          <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
          </div>
          <div class="icon">
              <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
          <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
          </div>
          <div class="icon">
              <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->
</div>
<div class="row">
  <div class="col-12">
      <div class="callout callout-info">
          <h5><i class="fas fa-info"></i> Note:</h5>
          This page has been enhanced for printing. Click the print button at the bottom of the
          invoice to test.
      </div>


      <!-- Main content -->
      <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
              <div class="col-12">
                  <h4>
                      <i class="fas fa-globe"></i> AdminLTE, Inc.
                      <small class="float-right">Date: 2/10/2014</small>
                  </h4>
              </div>
              <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                  From
                  <address>
                      <strong>Admin, Inc.</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Phone: (804) 123-5432<br>
                      Email: info@almasaeedstudio.com
                  </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                  To
                  <address>
                      <strong>John Doe</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Phone: (555) 539-1037<br>
                      Email: john.doe@example.com
                  </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
              <div class="col-12 table-responsive">
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Qty</th>
                              <th>Product</th>
                              <th>Serial #</th>
                              <th>Description</th>
                              <th>Subtotal</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Call of Duty</td>
                              <td>455-981-221</td>
                              <td>El snort testosterone trophy driving gloves handsome</td>
                              <td>$64.50</td>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Need for Speed IV</td>
                              <td>247-925-726</td>
                              <td>Wes Anderson umami biodiesel</td>
                              <td>$50.00</td>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Monsters DVD</td>
                              <td>735-845-642</td>
                              <td>Terry Richardson helvetica tousled street art master</td>
                              <td>$10.70</td>
                          </tr>
                          <tr>
                              <td>1</td>
                              <td>Grown Ups Blue Ray</td>
                              <td>422-568-642</td>
                              <td>Tousled lomo letterpress</td>
                              <td>$25.99</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning
                      heekya handango imeem
                      plugg
                      dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                      <table class="table">
                          <tr>
                              <th style="width:50%">Subtotal:</th>
                              <td>$250.30</td>
                          </tr>
                          <tr>
                              <th>Tax (9.3%)</th>
                              <td>$10.34</td>
                          </tr>
                          <tr>
                              <th>Shipping:</th>
                              <td>$5.80</td>
                          </tr>
                          <tr>
                              <th>Total:</th>
                              <td>$265.24</td>
                          </tr>
                      </table>
                  </div>
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
              <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank"
                      class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i
                          class="far fa-credit-card"></i> Submit
                      Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right"
                      style="margin-right: 5px;">
                      <i class="fas fa-download"></i> Generate PDF
                  </button>
              </div>
          </div>
      </div>
      <!-- /.invoice -->
  </div><!-- /.col -->
</div><!-- /.row -->

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FAQ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">FAQ</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
 <!-- Main content -->
 <section class="content">
  <div class="row">
      <div class="col-12" id="accordion">
          <div class="card card-primary card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                        Tamakilar barcha holatlari
                      </h4>
                  </div>
              </a>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                    Alkogolizm bilan og‘rigan har bir bemorda shikastlangan yurak-qon tomir tizimi mavjud.
                    Spirtli ichimliklar oshqozon osti bezini shikastlaydi, jigarga ta'sir qiladi  Tamakilar barcha holatlari 90 foizida o‘pka saratonidan o‘lim  sababi ekanligi uzoq vaqtdan beri isbotlangan
                  </div>
              </div>
          </div>
          <div class="card card-primary card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                        Giyohvand moddalar
                      </h4>
                  </div>
              </a>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    Giyohvand moddalar asab tizimi va miyaga salbiy ta'sir qiladi. Giyohvand moddalarning ta'siri natijasida insonning intellektual qobiliyatlari pasayadi va u asta-sekin ahmoq bo‘lib, tentaklikgacha boradi. Asab tizimi va miyaga salbiy ta'sir qiladi. Giyohvand moddalarning ta'siri natijasida insonning intellektual qobiliyatlari pasayadi va u asta-sekin ahmoq bo‘lib, tentaklikgacha boradi.
                  </div>
              </div>
          </div>
          <div class="card card-primary card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                        Spirtli ichimliklar
                      </h4>
                  </div>
              </a>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    Spirtli ichimliklar oshqozon osti bezini shikastlaydi, jigarga ta'sir qiladi  Tamakilar barcha holatlari 90 foizida o‘pka saratonidan o‘lim  sababi ekanligi uzoq vaqtdan beri isbotlangan
                      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                  </div>
              </div>
          </div>
          <div class="card card-warning card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          4. Donec pede justo
                      </h4>
                  </div>
              </a>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                  </div>
              </div>
          </div>
          <div class="card card-warning card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          5. In enim justo
                      </h4>
                  </div>
              </a>
              <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                  </div>
              </div>
          </div>
          <div class="card card-warning card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          6. Integer tincidunt
                      </h4>
                  </div>
              </a>
              <div id="collapseSix" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                  </div>
              </div>
          </div>
          <div class="card card-danger card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          7. Aenean leo ligula
                      </h4>
                  </div>
              </a>
              <div id="collapseSeven" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </div>
              </div>
          </div>
          <div class="card card-danger card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          8. Aliquam lorem ante
                      </h4>
                  </div>
              </a>
              <div id="collapseEight" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                  </div>
              </div>
          </div>
          <div class="card card-danger card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                  <div class="card-header">
                      <h4 class="card-title w-100">
                          9.  Quisque rutrum
                      </h4>
                  </div>
              </a>
              <div id="collapseNine" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                      Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-12 mt-3 text-center">
          <p class="lead">
              <a href="contact-us.html">Contact us</a>,
              if you found not the right anwser or you have a other question?<br />
          </p>
      </div>
  </div>
{{-- </section> --}}
<!-- /.content -->
@endsection