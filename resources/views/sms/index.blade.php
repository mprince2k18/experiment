
@extends('layouts.app')

@section('content')

<div class="container">

      <!--Section: Contact v.2-->
      <section class="mb-4">
          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5 offset-md-2">
                  <form id="contact-form" name="contact-form" action="{{ route('sendSMS') }}" method="POST">
                    @csrf
                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="phone" class="form-control">
                                  <label for="name" class="">Phone Numbers</label>
                              </div>
                          </div>
                          <!--Grid column-->



                      </div>
                      <!--Grid row-->


                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                  <label for="message">Your message</label>
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                      <button type="submit" name="button" class="btn btn-success">SEND</button>

                  </form>


                  <div class="status"></div>
              </div>
              <!--Grid column-->



          </div>

      </section>
      <!--Section: Contact v.2-->

</div>



@endsection
