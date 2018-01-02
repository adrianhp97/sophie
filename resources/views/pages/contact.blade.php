@extends('layouts.default')

@section('content')
<div class="custom-container">
  <div class="section">
    <div class="row">
      <div class="col s12 m6">
        <form id="contact-form">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">phone</i>
            <input id="phone_number" type="text" class="validate">
            <label for="phone_number">Phone Number</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">message</i>
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Message</label>
          </div>
        </form>
      </div>

      <div class="col s12 m6 center">
        <h3>Contact Us</h3>
        <div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection