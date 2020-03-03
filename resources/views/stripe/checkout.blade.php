
@extends('layouts.app')

@section('content')

<div class="container">

      <!--Section: Contact v.2-->
      <section class="mb-4">
          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5 offset-md-4">
                  <form id="contact-form" name="contact-form" action="{{ route('checkout') }}" method="POST">
                    @csrf
                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="amount" class="form-control">
                                  <label for="name" class="">Amount</label>
                              </div>
                          </div>
                          <!--Grid column-->



                      </div>
                      <!--Grid row-->


                      <button type="submit" name="button" class="btn btn-success">CHECKOUT</button>

                  </form>


                  <div class="status"></div>
              </div>
              <!--Grid column-->



          </div>

      </section>
      <!--Section: Contact v.2-->

</div>



@endsection
