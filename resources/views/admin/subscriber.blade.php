@extends('layouts.admin')

@section('content')
<div class="main-content">
  <!-- <div class="panel-wrapper"> -->
    <table class="highlight">
      @if(count($subscriber) >= 0)
      <thead>
        <tr>
            <th>Email</th>
            <th>Delete</th>
        </tr>
      </thead>

      <tbody>
        @foreach($subscriber as $sub)
        <tr id="{{ $sub['id'] }}">
          <td>{{ $sub['email'] }}</td>
          <td>
            <button data-target="delete_sub" class="waves-effect waves-light btn modal-trigger yellow darken-2" data_sub_id="{{$sub['id']}}">
              <i class="material-icons left" style="margin:0">delete</i>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
      <!-- <tr>
        <td colspan="2">
          <div class="pagination">{!! str_replace('/?', '?', $subscriber->render()) !!}</div>      
        </td>
      </tr> -->
      @else
      <tr>
        <td>No record found</td>
      </tr>
      @endif
    </table>
    
    {{ $subscriber->links() }}
    <div id="delete_sub" class="modal">
      <div class="modal-content">
        <form id="delete_sub_form">
          {{csrf_field()}}
          <input type="hidden" name="sub_id" />
          <button>Delete</button>
        </form>
      </div>
    </div>
  <!-- </div> -->
</div>
@endsection